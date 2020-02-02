<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    include '../error.php';
    exit;
}
    define('session-cookie_check',TRUE);
    include 'session-cookie_check.php';
    session_start();
    session_destroy();
    setcookie('hafhk43','',time()-360000,'/');
    setcookie('nbie09','',time()-360000,'/');
    unset($_COOKIE['hafhk43']);
    unset($_COOKIE['nbie09']);
    header('location:../login');
?>