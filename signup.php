<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <link rel="stylesheet" href="assets/build/css/intlTelInput.css">
    
    <link rel="stylesheet" href="assets/css/formbase.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/tokenfield-typeahead.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-tokenfield.min.css">

    <link rel="stylesheet" href="smartWizard/css/smart_wizard_theme_dots.css">
    <link rel="stylesheet" href="smartWizard/css/smart_wizard.css">

    <link rel="stylesheet" href="assets/css/global.css">


    <title>Sign Up</title>
</head>
<body>

    <section class="page_container">

    	<header>
    		<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="/">
			      	<img src="assets/img/adjomo-logo.png" alt="logo" />
			      </a>
			    </div>
			    
			    <ul class="nav navbar-nav navbar-right">
			      <li class="sign-in"><a href="#">Sign In</a></li>
			      <li class="ham-menu">
			      		<span class="line"></span>
			      		<span class="line"></span>
			      		<span class="line"></span>
			      </li>
			    </ul>
			  </div>
			</nav>
    	</header>

    <section class="container-fluid icons_back stretch flex-center flex-column">        
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
                        <select name="country" id="country" class="form-control" required>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" placeholder="youremail@yourcompany.com" class="form-control" required>
                    </div>
                    <div class="form-group col-md-5 col-md-offset-1">
                        <label for="email">Phone*</label>
                        <input type="tel" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <!--<input type="checkbox" id="privacy-policy" required>-->
                        <div class="control">
                            <input class="control__input" id="privacy" type="checkbox" required>
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

    
    </section>

    
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="assets/build/js/intlTelInput.js"></script>
    <script src="assets/build/js/utils.js"></script>
    <script src="assets/build/js/data.js"></script>

    <script src="assets/js/typeahead.bundle.min.js"></script>
    <script src="assets/js/bootstrap-tokenfield.min.js"></script>

    <script src="smartWizard/js/jquery.smartWizard.min.js"></script>

    <script src="assets/js/global.js"></script>

</body>
</html>