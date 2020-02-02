<?php
// Database is linked here
if(!defined('sql-connection_check')){
    include 'error.php';
    exit();
    }
    $sql_connect=mysqli_connect('localhost','root','');
    $db_connect=mysqli_select_db($sql_connect,'user_record');
    mysqli_query($sql_connect,$db_connect);
 ?>