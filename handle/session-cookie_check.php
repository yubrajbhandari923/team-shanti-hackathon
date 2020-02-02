<?php
// To direct users off the page when they are logged off
if(!defined('session-cookie_check')){
    include '../error.php';
    exit();
}
    $actual_link =$_SERVER['REQUEST_URI'];
    $no_ofBars=substr_count($actual_link,'/');//To find from where location the user has requested
    if(!isset($_COOKIE['hafhk43'])){
        session_start();
        $_SESSION['error_direct']='Please login first';
        if($no_ofBars>2){
            header('location:../login');
        }else{
            header('location:login');
        }
        exit();
    }
    if(!isset($_COOKIE['nbie09'])){
        session_start();
        $_SESSION['error_direct']='Please login first';
        if($no_ofBars>2){
            header('location:../login');
        }else{
            header('location:login');
        }
        exit();
    }