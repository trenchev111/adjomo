<?php
    include_once("db.php");
    
    require_once "formvalidator.php";
    // validator included

    $conn->close();
?>

<?php
    include_once("_Shared/header.html");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link rel="stylesheet" href="assets/build/css/intlTelInput.css">
    
    <link rel="stylesheet" href="assets/css/formbase.min.css">
    <link rel="stylesheet" href="assets/css/global.css">


    <title>Login</title>
</head>
<body>

    <section class="container page_container">


        
<?php
    include_once("_Shared/footer.html");
?> 