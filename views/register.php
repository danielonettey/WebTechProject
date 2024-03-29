<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register - Ashesi Admission</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select-country.min.css" />
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body style="background: url(img/ashesibac.jpg) center center no-repeat no-repeat;background-size: cover;">

    <div class="limiter">
        <div class="container-login100">
          
            <div class="wrap-login100 strechh p-l-50 p-r-50 p-t-72 p-b-50" style="padding-bottom: 40px; padding-top:40px;">

                <!--Form for signup page -->
                <form action="../controller/Users/signup.php" method="POST" class="login100-form validate-form">
                    <span class="login100-form-title p-b-59" style="padding-bottom: 20px;">
                        Sign Up
                    </span>
                    <div class="container_fluid" style="width: 100%;">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Valid First Name is required" style="padding-left:">
                                    <span class="label-input100">First Name</span>
                                    <input class="input100" type="text" name="fname" placeholder="">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Valid Last Name is required">
                                    <span class="label-input100">Last Name</span>
                                    <input class="input100" type="text" name="lname" placeholder="">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Gender is required" style="padding-left:">
                                    <span class="label-input100">Gender</span>
                                    <select class="input100" name= "gender" style="border: 0;">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <!-- <input class="input100" type="text" name="gender" placeholder=""> -->
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Valid date of birth is required">
                                    <span class="label-input100">Date of Birth</span>
                                    <input class="input100" type="date" name="dob" placeholder="">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                    <span class="label-input100">Email</span>
                                    <input class="input100" type="text" name="email" placeholder="">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wrap-input100 validate-input" data-validate="Valid telelephone is required">
                                    <span class="label-input100">Mobile phone</span>
                                    <input class="input100" type="tel" name="phone" placeholder="">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="wrap-input100 validate-input" data-validate="Country is required">
                                    <span class="label-input100">Country</span>
                                    <select class="selectpicker countrypicker input100" name="country" data-flag="true" data-default="GH" style="border: 0;"></select>
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="wrap-input100 validate-input" data-validate="Password is required (at least one digit, lowercase, uppercase and 8 characters)">
                                    <span class="label-input100">Password</span>
                                    <input class="input100" type="password" name="password" placeholder="*************">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="flex-m w-full p-b-33">
                                    <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                        <label class="label-checkbox100" for="ckb1">
                                            <span class="txt1">
                                                I agree to the
                                                <a href="#" class="txt2 hov1">
                                                    Terms of User
                                                </a>
                                            </span>
                                        </label>
                                    </div>


                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button type="submit" name="register_user" class="login100-form-btn">Sign Up</button> 
                                    </div>  
                                    <div>
                                        <a href="log_in.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                            Sign in
                                            <i class="fa fa-long-arrow-right m-l-5"></i>
                                        </a>
                                    </div>    

                                </div>
                            </div>
                        </div>                   
                    </div>  
                </form>
            </div>
        </div>
    </div>

    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap-select-country.min.js"></script>

</body>

</html>