<?php
 define('session-cookie_check',TRUE);
 include 'handle/session-cookie_check.php';//To deny access to the files directly By URL
 if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit;
}
define('sql-connection_check',TRUE);
define('check',TRUE);
include '../crypt.php';
include 'sql-connection.php';
$user_enc_key=$_COOKIE['hafhk43'];
$c=new McryptCipher('passKey');
$userID=$c->decrypt($user_enc_key);
$name=mysqli_real_escape_string($sql_connect,$_POST['name']);
$sqlQuery="UPDATE account SET name=$name WHERE id=$userID";
mysqli_query($sql_connect,$sqlQuery);
echo 1;