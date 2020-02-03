<?php
define('session-cookie_check',TRUE);
    include 'session-cookie_check.php';
    if(!isset($_SERVER['HTTP_REFERER'])){
        include 'error.php';
        exit;
    }
        define('sql-connection_check',TRUE);
        define('check',TRUE);
        include 'session-cookie_check.php';
        include 'sql-connection.php';
        include '../crypt.php';
        if(!isset($_POST['fileDir'])){
            echo 'Error';
            exit();
        }
        if(!isset($_POST['headText'])|| !isset($_POST['subText'])){
            echo 'Error';
            exit();
        }else{
            $headText=mysqli_real_escape_string($sql_connect,$_POST['headText']);
            $subText=mysqli_real_escape_string($sql_connect,$_POST['subText']);
            $tags=strtolower(mysqli_real_escape_string($sql_connect,$_POST['tags']));
            $actDir=mysqli_real_escape_string($sql_connect,$_POST['fileDir']);

        }
        $currentid_encrypt=$_COOKIE['hafhk43'];
        $c = new McryptCipher('passKey');
        $decrypted_id=$c->decrypt($currentid_encrypt);
        $sqlQuery="UPDATE cards SET headText='$headText',subText='$subText',tags='$tags' WHERE act_dir='$actDir' AND id=$decrypted_id";
        if(!mysqli_query($sql_connect,$sqlQuery)){
            mysqli_query($sql_connect,$sqlQuery);
        };
        echo 1;