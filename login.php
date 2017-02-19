<?php
    include_once("_Shared/header.html");
?> 

    <section class="page_container container-fluid icons_back flex-center flex-column stretch">
        <div class="container_white flex-center flex-column">
            <div class="title stretch">
                <h1 class="text-center bold">Well done David!</h1>
                <p class="text-center">Login and start monetize with ADJOMO.</p>
            </div>
            <form action="" method="post" class="login">
                <div class="row">
                    <div class="form-group flex-vertical-center col-md-6 col-md-offset-3">
                        <label for="username_mail">Your username or email</label>
                        <input type="text" class="form-control" id="username_mail" placeholder="user@company.com" required/>
                    </div> 
                    <div class="form-group flex-vertical-center col-md-6 col-md-offset-3">
                        <div class="forgot-password-login col-md-12 stretch">
                            <label for="login_password">Password</label>
                            <a href="" class="pull-right">Forgot my password</a>
                        </div>
                        <input type="text" class="form-control" id="login_password" placeholder="" required/>
                    </div> 
                    <div class="form-group logged flex-vertical-center col-md-6 col-md-offset-3">
                        <div class="control">
                            <input class="control__input" id="privacy" type="checkbox">
                            <label class="control__label" for="privacy">Keep me logged</label>
                        </div>                    
                    </div>
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" name="submit" id="login" class="btn btn-primary btn-lg btn-login">Login</button>
                    </div> 
                </div>                
            </form>
        </div>
    </section>
  
<?php
    include_once("_Shared/footer.html");
?> 