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
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">    
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
                    <form class="register-form" autocomplete=on id='register'>
                            <h1>Register</h1>
                            <div>
                                <label> FullName</label>
                            <input type=text name='fullname' placeholder="Enter Your Full Name"></div>
                            <div>
                                <label> Email Address</label>
                            <input type=email name='emailid' placeholder="Enter Your Email Address"></div>
                            <div>
                                <label> Username</label>
                            <input type=text name='username' placeholder="Enter Username"></div>
                            <div>
                                <label> Password</label>
                            <input type=password name='password' placeholder="Enter Password"></div>
                            <div>
                                <label> Phone Number</label>
                            <input type=tel name='phone' placeholder="Enter Phone Number"></div>
                            <div>
                                <label> Address</label>
                            <input type=text name='address' placeholder="Enter Address"></div>
                            <div>
                                <label> Profession</label>
                            <input type=text name='profession' placeholder="Enter your Profession"></div>
                            <div>
                                <label> Workplace</label>
                            <input type=text name='workplace' placeholder="Enter your workplace"></div>
                            <div>
                                <label> Speciality</label>
                            <input type=text name='speciality' placeholder="Enter your speciality at profession"></div>
                            <div>
                                <label> Any additional Detail?</label>
                            <textarea name='detail' placeholder="Enter your detailed information"></textarea></div>
                            <div id="error" class='error'></div>
                            
                            <button type=button id='submit'> Register </button>
                            <button id="goto-log"> Already registered? Log in </button>
                            
                        </form>
                        <form class="login-form" method="POST" action="handle/logincheck">
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
                            <a href='#'><button type='button'>Forgot Password</button></a>
                        </form>
            </section>
        </section>
    </section>
</body>
<script src='refrences/js/jquery.js'></script>
<script src='refrences/js/log.js'></script>
</html>
<?php session_destroy();?>