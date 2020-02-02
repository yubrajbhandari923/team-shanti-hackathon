<?php
if(!defined('check-user_cookie_check')){
     include 'error.php';
     exit;
 }
if(isset($_COOKIE['hafhk43'])&& isset($_COOKIE['nbie09'])){
        header('location:home');
    }
if(isset($_COOKIE['fdgirt3'])){
    setcookie('fdgirt3','',time()-3600,'/');
    unset($_COOKIE['fdgirt3']);
    }
?>