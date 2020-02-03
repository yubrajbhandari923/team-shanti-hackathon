<?php
    define('session-cookie_check',TRUE);
    if(!isset($_SERVER['HTTP_REFERER'])){
        include '../error.php';
        exit;
    }
        define('sql-connection_check',TRUE);
        define('check',TRUE);
        include 'sql-connection.php';
        include '../crypt.php';
        $init_var=mysqli_real_escape_string($sql_connect,$_POST['query']);
        if(empty($init_var)){
            echo 1;
            exit();
        }    
        $sqlQuery="SELECT * FROM cards";
        $empArr=[];
        $sqlQueryStore=mysqli_query($sql_connect,$sqlQuery);
        while($sqlStore=mysqli_fetch_assoc($sqlQueryStore)){
            $tagsContArr= explode(",",$sqlStore['tags']);
            for($i=0;$i<count($tagsContArr);$i++){
                $str=substr_compare($tagsContArr[$i],$init_var,0,strlen($init_var),true);
                if($str==0){
                        array_push($empArr,$sqlStore);
                        break;
                }
            }
        }
        if(count($empArr)==0){
            echo 1;
            exit();
        }else{
            echo json_encode($empArr);
        }
