<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ashesi Admission</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body style="background: url(img/ashesibac.jpg) center center no-repeat no-repeat;background-size: cover;">

    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" style="padding-top:40px;padding-bottom:40px;">
                    <form action="../controller/Users/login.php" method="GET"  class="login100-form validate-form">
                
                    <span class="login100-form-title p-b-59" style="padding-bottom: 30px;">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Email addess...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    

                    <div class="container-login100-form-btn" style="padding-top: 20px;width: 100%;">
                        <div class="wrap-login100-form-btn" style="width:100%;text-align: center;">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" name="login_user" class="login100-form-btn" style="width:100%;">Login</button>
                     
                        </div>
                        <span class="txt1 p-t-10" style="margin-top:10px;margin-left: auto;margin-right: auto;">
                            Dont have an account?
                            <a href="register.php" class="txt2 hov1">
                                Sign up
                            </a>
                        </span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>