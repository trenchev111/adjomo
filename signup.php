<?php
    include_once("db.php");

    require_once "formvalidator.php";    
    

    function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
        }

        return $token;
    }


    if(isset($_POST['submit'])) {// The form is submitted

        //Setup Validations
        $validator = new FormValidator();
        $validator->addValidation("fullname","req","Please fill in Name");
        $validator->addValidation("email","email","The input for Email should be a valid email value");
        $validator->addValidation("email","req","Please fill in Email");
        $validator->addValidation("company","req","Please fill in company website");
        $validator->addValidation("role","req","Please fill in role");
        $validator->addValidation("phone","req","Please fill in phone");
        
        if($validator->ValidateForm())
        {            
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $role = $_POST['role'];
            $phone = $_POST['phone'];
            $token = getToken(127);
            
            $sql = "INSERT INTO users(fullname,email,company,role,phone,token) VALUES('$fullname','$email','$company','$role','$phone','$token')";

            // if mail exists in db  
            $query = "SELECT * FROM adjomo.users WHERE email = '$email'";

            if ($conn->query($sql) === TRUE) {
                header("Location: after_register.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $show_form = false;                        
        }
        else
        {
            echo "<B>Validation Errors:</B>";

            $error_hash = $validator->GetErrors();
            foreach($error_hash as $inpname => $inp_err)
            {
                echo "<p>$inpname : $inp_err</p>\n";
            }        
        }//else
    }//if(isset($_POST['submit']))

    $conn->close();
?>

<?php
    include_once("_Shared/header.html");
?> 
<p class="text-center">Already an ADJOMO publisher? <a href="login.php">Sign in here</a></p>
<section class="page_container container">
    <div class="container_white">
        <section class="title col-md-12">
            <h1 class="text-center bold">Become a Publisher</h1>
            <p class="text-center">Fill the information below to create your ADJOMO account.</p>
        </section>
        <form method="post">
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="fullname">Fullname*</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Your fullname" class="form-control">
                </div>
                <div class="form-group col-md-5 col-md-offset-1">
                    <label for="role">Role/Job position*</label>
                    <input type="text" name="role" id="role" placeholder="Your role" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="company">Company Website*</label>
                    <input type="text" name="company" id="company" placeholder="www.yourcompany.com" class="form-control">
                </div>
                <div class="form-group col-md-5 col-md-offset-1">
                    <label for="role">Country*</label>
                    <select name="country" id="country" class="form-control">
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="email">Email*</label>
                    <input type="email" name="email" id="email" placeholder="youremail@yourcompany.com" class="form-control">
                </div>
                <div class="form-group col-md-5 col-md-offset-1">
                    <label for="email">Phone*</label>
                    <input type="tel" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <!--<input type="checkbox" id="privacy-policy" required>-->
                    <div class="control">
                        <input class="control__input" id="privacy" type="checkbox">
                        <label class="control__label" for="privacy">I've read and accept the <a href="">Privacy Policy</a></label>
                    </div>
                    
                </div>
                <div class="form-group col-md-12 text-center">
                    <button type="submit" name="submit" id="register" class="btn btn-primary btn-lg btn-register">Register</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php
    include_once("_Shared/footer.html");
?> 