<?php
    include_once("db.php");
    

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


    <title>Successfully Registered</title>
</head>
<body>
    
    <section class="page_container container">
        <div class="container_white">
            <div class="title">
                <h1 class="text-center bold">Thank you for registering David!</h1>
                <p class="text-center">You will receive an email [contact_email] ASAP, to complete registration process.</p>
            </div>
            <div class="image">
                <img src="assets/img/adjomo-logo.png" alt="logo" class="img-responsive">
                <h4 class="main-color text-center bold">Stay tuned</h4>
                <p class="text-center">
                    It's going to sound good :-)
                </p>
            </div>
        </div>
    </section>
    
        
<?php
    include_once("_Shared/footer.html");
?> 