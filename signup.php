<?php
    include_once("db.php");



    $conn->close();

?>

<?php
    include_once("_Shared/header.html");
?> 

<h1>SIGN UP</h1>
<form>
    <div class="form-group">
        <div class="form-group">
            <label for="username">Password</label>
            <input type="username" class="form-control" id="username" placeholder="Username">
        </div>    
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>                     
    <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
    include_once("_Shared/footer.html");
?> 