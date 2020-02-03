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
        $curruserEncr=$_COOKIE['hafhk43'];
        $c=new McryptCipher('passKey');
        $currUserId=$c->decrypt($curruserEncr);
        if(!isset($_GET['headText'])||empty($_GET['headText'])){
            // echo 'error';
            header('location:../user_cards');
        }else{
            $currheadText=mysqli_real_escape_string($sql_connect,$_GET['headText']);
        }
        if(!isset($_GET['img_dir'])||empty($_GET['img_dir'])){
            // echo 'error';
            header('location:../user_cards');
        }else{
            $picLoc=mysqli_real_escape_string($sql_connect,$_GET['img_dir']);
        }
        $SQLquery="DELETE FROM cards WHERE id=$currUserId AND headText='$currheadText' AND img_dir='$picLoc'";
        mysqli_query($sql_connect,$SQLquery);
        header('location:../user_cards');