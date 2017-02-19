<?php
    include_once("db.php");    

    $required_token = $_GET["token"];    
    $url_token = "SELECT token FROM users WHERE token='".$required_token."'";
    $delete_token = "UPDATE users SET token = null WHERE token='".$required_token."'";
    $result = $conn->query($url_token);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            if($required_token == $row['token']){
                $conn->query($delete_token);
            }
        }
    }

    $conn->close();
?> 

<?php
    include_once("_Shared/header.html");
?>    
    <section class="page_container container-fluid stretch icons_back activate_account">
        <div class="container_white">   
            <section class="title">
                <h1 class="text-center">Become a Publisher</h1>
                <p class="text-center">Welcome back David, please complete the registration process to active your account. </p>
            </section>
                                       
            <form method="post" class="smartWizard" id="smartWizard">
                 <ul>
                    <li><a href="#step-1"></a></li>
                    <li><a href="#step-2"></a></li>
                </ul>
                <div class="row flex-wrap flex">
                    <div class="col-md-12 flex flex-wrap" id="step-1">
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="password">Set password*</label>
                            <input type="password" name="password" id="password" placeholder="" class="form-control" required>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="confirm-password">Confirm password*</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder="" class="form-control" required>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="skype_name">Skype name*</label>
                            <input type="text" name="skype_name" id="skype_name" placeholder="your skype name" class="form-control" required>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="company_fiscal">Company Fiscal Name*</label>
                            <input type="text" name="company_fiscal" id="company_fiscal" placeholder="your company fiscal name" class="form-control" required>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="company_size">Company size number of employees*</label>
                            <select name="company_size" id="company_size" class="form-control" required>
                                <option value="one_man_show">One Man Show</option>
                            </select>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="business_model">Business model*</label>
                            <select name="business_model" id="business_model" class="form-control" required>
                                <option value="traffic_network">Traffic Network</option>
                            </select>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="top_verticals">Top verticals(separate by comma)*</label>
                            <input type="text" value="Games,software,streaming" class="form-control" required/>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="top_verticals">Top geos*</label>
                            <input type="text" class="form-control" id="top_verticals" value="spain" />
                        </div> 
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="payment_method">Payment method*</label>
                            <select name="payment_method" id="" class="form-control">
                                <option value="bank_wire">Bank Wire</option>
                            </select>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="bank_name">Your bank name*</label>
                            <input type="text" class="form-control" id="bank_name" placeholder="Your bank name"/>
                        </div>  
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="bank_country">Bank country*</label>
                            <select name="bank_country" id="" class="form-control">
                                <option value="bank_wire">Select country</option>
                            </select>
                        </div>     
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <div class="control">
                                <input class="control__input" id="euro" type="radio" name="currency" value="Euro" checked>
                                <label class="control__label" for="euro">Euro</label>
                            </div>

                            <div class="control">
                                <input class="control__input" id="dollar" type="radio" name="currency" value="Dollar">
                                <label class="control__label" for="dollar">Dollar</label>
                            </div>
                        </div>       
                        <div class="form-group flex-vertical-center col-md-12">
                            <div class="control">
                                <input class="control__input" id="privacy" type="checkbox" required>
                                <label class="control__label" for="privacy">I've read and accept the <a href="">Privacy Policy</a></label>
                            </div>                    
                        </div>      
                        <!--<div class="form-group col-md-12 text-center">
                            <button type="submit" name="submit" id="next" class="btn btn-primary btn-lg btn-register">Next</button>
                        </div> -->
                    </div>  

                    <div class="col-md-12 flex flex-wrap" id="step-2">
                        <div class="form-group networks flex-vertical-center col-md-5">
                            <label for="">Are you working with other networks</label>
                            <div class="control">
                                <input class="control__input" id="yes" type="radio" name="networks" value="Yes" checked>
                                <label class="control__label" for="yes">Yes</label>
                            </div>

                            <div class="control">
                                <input class="control__input" id="no" type="radio" name="networks" value="No">
                                <label class="control__label" for="no">No</label>
                            </div>
                        </div>  
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="list_networks">Can you list them? (separate by comma)</label>
                            <input type="text" class="form-control" id="list_networks" placeholder="Network 1, Network 2, etc.."/>
                        </div>  
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="list_networks">Any Trade Show you're gonna attend to?</label>
                            <input type="text" class="form-control" id="list_networks" placeholder="StartUp Summit Lisbon, Ome Madrid"/>
                        </div>  
                        <div class="form-group flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="hear_us">How did you hear from us?</label>
                            <select name="hear_us" id="" class="form-control">
                                <option value="bank_wire">Choose</option>
                            </select>
                        </div>
                        <div class="form-group flex-vertical-center col-md-5">
                            <label for="contacted">How do you prefer to be contacted?</label>
                            <select name="contacted" id="" class="form-control">
                                <option value="bank_wire">Choose</option>
                            </select>
                        </div>  
                        <div class="form-group networks flex-vertical-center col-md-5 col-md-offset-1">
                            <label for="">Wanna receive our newsletter?</label>
                            <div class="control">
                                <input class="control__input" id="yesNewsletter" type="radio" name="newsletter" value="Yes" checked>
                                <label class="control__label" for="yesNewsletter">Yes</label>
                            </div>

                            <div class="control">
                                <input class="control__input" id="noNewsletter" type="radio" name="newsletter" value="No">
                                <label class="control__label" for="noNewsletter">No</label>
                            </div>
                        </div>    
                    </div>    

                </div>                                            
            </form>            
        </div>        
    </section>
<?php
    include_once("_Shared/footer.html");
?> 