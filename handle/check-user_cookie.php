<?php
// To check intially on entering at login like page
if(!defined('check-user_cookie_check')){
     include '../error.php';
     exit;
 }
if(isset($_COOKIE['hafhk43'])&& isset($_COOKIE['nbie09'])){//For already logged send them forward
        header('location:user_dashboard');
    }