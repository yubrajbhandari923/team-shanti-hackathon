<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
        include 'error.php';
        exit;
    }
    define('sql-connection_check',TRUE);
    include 'sql-connection.php';  
    if(!isset($_POST['uid'])||empty($_POST['uid'])){
        echo 1;
        exit();
    }else{
        $uid=mysqli_real_escape_string($sql_connect,$_POST['uid']);
    }
    // Now fetch data from database
    $sqlQuery="SELECT * FROM account WHERE id=$uid";
    $sqlQueryStore=mysqli_query($sql_connect,$sqlQuery);
    $noOfRows=mysqli_num_rows($sqlQueryStore);
    if($noOfRows==0){
        echo 1;
        exit();
    }
    $sqlDataStore=mysqli_fetch_assoc($sqlQueryStore);
    unset($sqlDataStore['id']);
    unset($sqlDataStore['password']);
    unset($sqlDataStore['username']);
    echo json_encode($sqlDataStore);