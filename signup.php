<?php
    include_once("db.php");
    
    require_once "assets/formvalidator.php";
    // validator included

    $conn->close();
?>

<?php
    include_once("_Shared/header.html");
?> 

<h1>SIGN UP</h1>
<form method="post">
    <div class="form-group">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="username" class="form-control" id="username" placeholder="Username" name="username" required>
        </div>    
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>                     
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
</form>

<?php
    include_once("_Shared/footer.html");
?> 