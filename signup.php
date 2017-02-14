<?php
    include_once("db.php");
    
    require_once "assets/formvalidator.php";
    // validator included

    $conn->close();
?>

<?php
    include_once("_Shared/header.html");
?> 

<p class="text-center">Already an ADJOMO publisher? <a href="">Sign in here</a></p>
<div class="container_white">
    <section class="title col-md-12">
        <h1 class="text-center bold">Become a Publisher</h1>
        <p class="text-center">Fill the information below to create your ADJOMO account.</p>
    </section>
    <form method="post">
        <div class="row">
            <div class="form-group col-md-5">
                <label for="fullname">Fullname*</label>
                <input type="text" name="fullname" id="fullname" placeholder="Your fullname" class="form-control" required>
            </div>
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="role">Role/Job position*</label>
                <input type="text" name="role" id="role" placeholder="Your role" class="form-control" required>
            </div>
            <div class="form-group col-md-5">
                <label for="company">Company Website*</label>
                <input type="text" name="company" id="company" placeholder="www.yourcompany.com" class="form-control" required>
            </div>
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="role">Country*</label>
                <select name="country" id="country" required>
                    <option value="spain">Spain</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" placeholder="youremail@yourcompany.com" class="form-control" required>
            </div>
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="email">Phone*</label>
                <select name="country" id="country" required>
                    <option value="spain">Spain</option>
                </select>
            </div>
        </div>
    </form>
</div>
<?php
    include_once("_Shared/footer.html");
?> 