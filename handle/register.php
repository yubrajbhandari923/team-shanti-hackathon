<?php
define('sql-connection_check',TRUE);
define('verifyemail_check',TRUE);
define('credential_check',TRUE);
define('mail_check',TRUE);
if(!isset($_SERVER['HTTP_REFERER'])){
    include 'error.php';
    exit;
}
    session_start();
    include 'sql-connection.php';
    if(empty($_POST['fullname'])){
        echo 'Please enter your name';
        exit();
    }else{
        $name=mysqli_real_escape_string($sql_connect,$_POST['fullname']);
    }
    if(empty($_POST['emailid'])){
        echo 'Please enter your email';
        exit();
    }else{
        $email=mysqli_real_escape_string($sql_connect,$_POST['emailid']);
    }
    if(empty($_POST['username'])){
        echo 'Please enter your username';
        exit();
    }else{
        $username=mysqli_real_escape_string($sql_connect,$_POST['username']);
    }
    if(empty($_POST['password'])){
        echo 'Please enter your password';
        exit();
    }else{
        $password=mysqli_real_escape_string($sql_connect,$_POST['password']);
    }
    if(strlen($password)<8){
        echo 'Password should be at least 8 character';
        exit();
    }
    if(strlen($username)<6){
        echo 'Username should be at least 6 character';
        exit();
    }
    if(empty($_POST['phone'])){
        echo 'Please enter your phone number';
        exit();
    }else{
        $phone=mysqli_real_escape_string($sql_connect,$_POST['phone']);
    }
    if(empty($_POST['address'])){
        echo 'Please enter your address';
        exit();
    }else{
        $address=mysqli_real_escape_string($sql_connect,$_POST['address']);
    }
    if(empty($_POST['profession'])){
        echo 'Please enter your profession';
        exit();
    }else{
        $profession=mysqli_real_escape_string($sql_connect,$_POST['profession']);
    }
    if(empty($_POST['workplace'])){
        echo 'Please enter your workplace';
        exit();
    }else{
        $workplace=mysqli_real_escape_string($sql_connect,$_POST['workplace']);
    }
    if(empty($_POST['speciality'])){
        echo 'Please enter your speciality at your profession';
        exit();
    }else{
        $speciality=mysqli_real_escape_string($sql_connect,$_POST['speciality']);
    }
    if(empty($_POST['detail'])){
        echo 'Please enter your details';
        exit();
    }else{
        $detail=mysqli_real_escape_string($sql_connect,$_POST['detail']);
    }
    if(strlen($phone)<10 || strlen($phone)>13){
        echo 'This is not a valid phone number';
        exit();
    }
    if(!validate_mobile($phone)){
        echo 'invalid Phone';
        exit();
    }
    function validate_mobile($mobile){//Phone number validation
    return preg_match('/^[0-9]{10}+$/', $mobile);
        }
    if(strlen($detail)<10){
        echo 'Details should be at least 10 character';
        exit();
    }

    // To check initially if user already Exists
    $check_email="SELECT * FROM account WHERE email='$email'";
    $query_check_email=mysqli_query($sql_connect,$check_email);
    $check_username="SELECT * FROM account WHERE username='$username'";
    $query_check_username=mysqli_query($sql_connect,$check_username);

    $row_email=mysqli_num_rows($query_check_email);
    if($row_email>=1){
        echo 'Email is already used';
        exit();
    }
    $row_username=mysqli_num_rows($query_check_username);
    if($row_username>=1){
        echo 'Username is already taken';
        exit();
    }
    // ****************************************
    // To put the data in database
    $record="INSERT INTO account(name,username,email,password,phone,address,profession,workplace,speciality,detail) VALUES('$name','$username','$email','$password','$phone','$address','$profession','$workplace','$speciality','$detail')";
    mysqli_query($sql_connect,$record);
    $select_user_id="SELECT * FROM account WHERE username='$username' AND password='$password'";
    $select_user_id_query=mysqli_query($sql_connect,$select_user_id);
    $row_check=mysqli_num_rows($select_user_id_query);
    if($row_check==1){
        $row=mysqli_fetch_assoc($select_user_id_query);
        $user_curr_id=$row['id'];
    }
    $rank_record="INSERT INTO user_rank(id) VALUES('$user_curr_id')";
    mysqli_query($sql_connect,$rank_record);
    $_SESSION['register_success']='Congratulations!You have successfully registered<br>Now login with your details.';
    echo 1;//Go to login with Congrats