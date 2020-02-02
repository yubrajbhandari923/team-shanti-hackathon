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
        if(!isset($_POST['headText'])||!isset($_POST['subText'])){
            echo 'Please Fill up all Data';
            exit();
        }else{
            $headText=mysqli_real_escape_string($sql_connect,$_POST['headText']);
            $subText=mysqli_real_escape_string($sql_connect,$_POST['subText']);
            $tags=mysqli_real_escape_string($sql_connect,$_POST['tags']);
        }
        $currentid_encrypt=$_COOKIE['hafhk43'];
        $c = new McryptCipher('passKey');
        $currentid= $c->decrypt($currentid_encrypt);
        $filename=$_FILES['file']['name'];
        $temp_dir=$_FILES['file']['tmp_name'];
        $fileerror=$_FILES['file']['error'];
        $filetype=$_FILES['file']['type'];
        $filesize=$_FILES['file']['size'];
            //Now getting file name and extension
            $file_ext=explode('.',$filename);
            $actual_file_ext=end($file_ext);
            $file_name_only=$file_ext[0];
            $allowed=['png','jpeg','jpg','JPG','PNG','JPEG'];

            if($filename==""){
                echo "Please select a file";
                exit();
            }else{
                if($fileerror===0){
                        if(in_array($actual_file_ext,$allowed)){
                                if($filesize<5000000){
                                    $newfilename=uniqid('',true).'.'.$actual_file_ext;
                                    $file_destination="../uploads/pics/".$newfilename;
                                    $file_destination_db="uploads/pics/".$newfilename;
                                    move_uploaded_file($temp_dir,$file_destination);
                                    // **************************
                                    $insert_data="INSERT INTO cards(id,img_dir,headText,subText,tags)VALUES('$currentid','$file_destination_db','$headText','$subText','$tags')";
                                    mysqli_query($sql_connect,$insert_data);                                    
                                    echo 1;
                                    exit();
                                }else{
                                    echo "File is too big";
                                    exit();
                                }
                        }else{
                            echo "File type not allowed";
                            exit();
                        }
                }else{
                    echo "There was an error";
                    exit();
                }
            }
    ?>