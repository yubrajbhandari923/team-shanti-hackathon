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
        if(!isset($_POST['headText'])|| !isset($_POST['subText'])){
            echo 'Error';
            exit();
        }else{
            $headText=mysqli_real_escape_string($sql_connect,$_POST['headText']);
            $subText=mysqli_real_escape_string($sql_connect,$_POST['subText']);
        }
        $insert_data="INSERT INTO cards(id,img_dir)VALUES('$currentid','$file_destination_db')";
        mysqli_query($sql_connect,$insert_data);                                    
        echo 1;
