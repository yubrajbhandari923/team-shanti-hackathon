<?php
 define('session-cookie_check',TRUE);
 include 'session-cookie_check.php';//To deny access to the files directly By URL
 if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit;
}
define('sql-connection_check',TRUE);
define('check',TRUE);
include '../crypt.php';
include 'sql-connection.php';
if(!isset($_POST['address'])||empty($_POST['address'])){
    echo 'Submit all data';
    exit();
}else{
    $address=mysqli_real_escape_string($sql_connect,$_POST['address']);
}
if(!isset($_POST['contact'])||empty($_POST['contact'])){
    echo 'Submit all data';
    exit();
}else{
    $contact=mysqli_real_escape_string($sql_connect,$_POST['contact']);
}
if(!isset($_POST['profession'])||empty($_POST['profession'])){
    echo 'Submit all data';
    exit();
}else{
    $profession=mysqli_real_escape_string($sql_connect,$_POST['profession']);
}
if(!isset($_POST['workplace'])||empty($_POST['workplace'])){
    echo 'Submit all data';
    exit();
}else{
    $workplace=mysqli_real_escape_string($sql_connect,$_POST['workplace']);
}
if(!isset($_POST['speciality'])||empty($_POST['speciality'])){
    echo 'Submit all data';
    exit();
}else{
    $speciality=mysqli_real_escape_string($sql_connect,$_POST['speciality']);
}
if(!isset($_POST['detail'])||empty($_POST['detail'])){
    echo 'Submit all data';
    exit();
}else{
    $detail=mysqli_real_escape_string($sql_connect,$_POST['detail']);
}
$user_enc_key=$_COOKIE['hafhk43'];
$c=new McryptCipher('passKey');
$userID=$c->decrypt($user_enc_key);
$sqlQuery="UPDATE account SET phone=$contact,address='$address',profession='$profession',workplace='$workplace',speciality='$speciality',detail='$detail' WHERE id=$userID";
if(!mysqli_query($sql_connect,$sqlQuery)){
    echo 'Couldnt perform request';
    exit();
}
echo 1;