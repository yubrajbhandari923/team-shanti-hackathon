<?php
define('sql-connection_check',TRUE);
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit;
}
    session_start();
    include 'sql-connection.php';
    if(empty($_POST['name'])){
        echo 'Please enter your name';
        exit();
    }else{
        $name=mysqli_real_escape_string($sql_connect,$_POST['name']);
    }
    if(empty($_POST['email'])){
        echo 'Please enter your email';
        exit();
    }else{
        $email=mysqli_real_escape_string($sql_connect,$_POST['email']);
    }
    if(empty($_POST['purpose'])){
        echo 'Please enter your email';
        exit();
    }else{
        $purpose=mysqli_real_escape_string($sql_connect,$_POST['purpose']);
    }
    if(empty($_POST['uid'])){
        echo 'Couldnt perform your request';
        exit();
    }else{
        $uid=$_POST['uid'];
    }
    $sql="INSERT INTO notify (id,notify,email,purpose) VALUES('$uid','$name','$email','$purpose')";
    mysqli_query($sql_connect,$sql);
    echo 1;