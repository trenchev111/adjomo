<?php
    include_once("db.php");    

    $conn->close();

?> 

<?php
    include_once("_Shared/header.html");
?>    
    <section class="page_container container-fluid icons_back flex-center flex-column stretch">
        <div class="container_white flex-center flex-column">
            <div class="title stretch">
                <h1 class="text-center bold">Thank you for registering David!</h1>
                <p class="text-center">You will receive an email [contact_email] ASAP, to complete registration process.</p>
            </div>
            <div class="image">
                <img src="assets/img/thank_you.png" alt="logo" class="img-responsive thank_you">
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