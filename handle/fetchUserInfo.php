<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
        include 'error.php';
        exit;
    }
    define('session-cookie_check',TRUE);
    include 'session-cookie_check.php';//To deny access to the files directly By URL
    define('sql-connection_check',TRUE);
    include 'sql-connection.php';
    define('check',TRUE);
    include '../crypt.php';
    if(!isset($_POST['uid'])||empty($_POST['uid'])){
        echo 1;
        exit();
    }else{
        $uid=mysqli_real_escape_string($sql_connect,$_POST['uid']);
    }
    // Now fetch data from database
    $c = new McryptCipher('passKey');
    $decrypted_user_id= $c->decrypt($uid);//To decrypt encrypted user infomations
    $sqlQuery="SELECT * FROM account WHERE id=$decrypted_user_id";
    $sqlQueryStore=mysqli_query($sql_connect,$sqlQuery);
    $sqlDataStore=mysqli_fetch_assoc($sqlQueryStore);
    unset($sqlDataStore['id']);
    unset($sqlDataStore['password']);
    echo json_encode($sqlDataStore);



