<?php
    define('session-cookie_check',TRUE);
    include 'session-cookie_check.php';
    if(!isset($_SERVER['HTTP_REFERER'])){
        include '../error.php';
        exit;
    }
        define('sql-connection_check',TRUE);
        define('check',TRUE);
        include 'session-cookie_check.php';
        include 'sql-connection.php';
        include '../crypt.php';
        $currId=$_COOKIE['hafhk43'];
        $c=new McryptCipher('passKey');
        $currCode=$c->decrypt($currId);
        $sqlQuery="SELECT * FROM cards WHERE id=$currCode";
        $sqlQueryStore=mysqli_query($sql_connect,$sqlQuery);
        $num_rows=mysqli_num_rows($sqlQueryStore);
        if($num_rows==0){
            echo 1;
            exit();
        }else{
            $empArr=[];
            while($data=mysqli_fetch_assoc($sqlQueryStore)){
                array_push($empArr,$data);
            }
            echo json_encode($empArr);
        }