<?php
    include_once("db.php");

    require_once "formvalidator.php";    
    
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

            // if mails exists in db  

            $sql = "INSERT INTO users(fullname,email,company,role,phone) VALUES('$fullname','$email','$company','$role','$phone')";

            $query = "SELECT * FROM users";
            $email_exists = mysql_query($query);
            
            while ($row = mysql_fetch_array($email_exists))
            {
                $email1 = $row['email'];
                
                if($email1 == $email) {
                    echo "email exists";
                }else{
                    mysql_query($sql);
                }
                
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
<?php
    include_once("_Shared/footer.html");
?> 