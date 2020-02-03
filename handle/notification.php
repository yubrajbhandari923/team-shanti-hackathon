<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit;
}
define('sql-connection_check',TRUE);
define('check',TRUE);
include '../crypt.php';
    include 'sql-connection.php';
    if(empty($_POST['notReq'])||!isset($_POST['notReq'])){
        echo 1;
        exit();
}
$get__user=$_COOKIE['hafhk43'];
$c=new McryptCipher('passKey');
$decrypted__user=$c->decrypt($get__user);
$empArray=[];
$sqlQuery="SELECT * FROM notify WHERE id=$decrypted__user";
$storeSQL=mysqli_query($sql_connect,$sqlQuery);
while($ssqlData=mysqli_fetch_assoc($storeSQL)){
    array_push($empArray,$ssqlData);
}
echo json_encode($empArray);
