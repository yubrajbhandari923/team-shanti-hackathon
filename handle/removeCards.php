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
        $currUserId='2';
        $currheadText='Coer';
        $picLoc='stg';
        $SQLquery="DELETE FROM cards WHERE id=$currUserId AND headText=$currheadText AND img_dir=$picLoc";
        mysqli_query($sql_connect,$SQLquery);
        echo 1;