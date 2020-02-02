<?php
define('check-user_cookie_check',TRUE);
include 'handle/check-user_cookie.php';
session_start();
if(isset($_GET['page'])){
    $data=$_GET['page'];
}else{
    $data='log';
}
if($data!='reg'){
    $data='log';
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Quiz Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title> Guffadi </title>
    <link rel='stylesheet' href="refrences/fonts/fonts.css">
    <link rel="stylesheet" href='refrences/css/login-style.css'>
    <script src="refrences/js/login-script.js">
     </script>
</head>
<body>
    <span style='width:100%;margin:auto;color:white;text-align:center;position:absolute;top:0;font:20px josefinsans; background: lightskyblue; border: 1px solid skyblue;z-index:10'>
       <?php
if(isset($_SESSION['register_success'])){
echo $_SESSION['register_success'];
}
if(isset($_SESSION['error_direct'])){
    echo $_SESSION['error_direct'];
    }
?>
</span>
    <section class="container">
        <section class="hero">
            <section class="forms forms-<?php echo $data; ?>">
                    <form class="register-form" method="POST" action="handle/register" autocomplete=on>
                            <h1>Register</h1>
                            <input type=text name='fullname' placeholder="Enter Your Full Name">
                            <input type=email name='emailid' placeholder="Enter Your Email Address">
                            <input type=text name='username' placeholder="Enter Username">
                            <input type=password name='password' placeholder="Enter Password">
                            <div class="error"><?php if(isset($_SESSION['error'])){echo $_SESSION['error'];}?></div>
                            
                            <button type=submit> Register </button>
                            <button id="goto-log"> Already registered? Log in </button>
                            
                        </form>
                        <form class="login-form" method="POST" action="logincheck">
                            <h1>Log In</h1>
                            <input type=text name='username1' Placeholder="Username || E-mail">
                            <input type=password name='password1' Placeholder="Password">
                            <div class="error">
                            <?php
                            if(isset($_SESSION['error1'])){
                            echo $_SESSION['error1'];
                            }
                            ?>
                            </div>
                            <button type=submit> Login </button>
                            <button id="goto-reg">New ? Register</button>
                            <a href='forgotpassword'><button type='button'>Forgot Password</button></a>
                            <button type='submit' name='guest-reg'>Login as Guest</button>
                        </form>
            </section>
        </section>
    </section>
</body>
<script src="refrences/js/if_dataDel.js"></script>
</html>
<?php session_destroy();?>
