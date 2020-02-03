
<?php
 define('session-cookie_check',TRUE);
 include 'handle/session-cookie_check.php';//To deny access to the files directly By URL
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="refrences/icons/flaticon.css">
    <link rel="stylesheet" href="refrences/css/userdashboard.css">
    <script src='refrences/js/jquery.js'></script>
    <title>Login</title>
</head>
<body>
    <section class="bodyContainer">
    <?php include "header.php" ?>

        <section class="bodyContent">
            <div class="contentHead">
                <h1 >Dashboard</h1>
            </div>
            <div class="userInfo">
                <div class="userInfo__userPP">
                    <div class="userPPcontainer">
                       <h1></h1> 
                    </div>
                </div>
                <div class="userInfo__userData">
                    <form>
                    <ul>
                        <h2> Personal Information</h2>
                        <button class="edit__userData cards__button">Edit</button>
                        <li class="userData__a">
                            <p> Fullname :</p><p class="userValue"></p>
                        </li>                        
                        <li class="userData__a">
                            <p> Email :</p><p class="userValue"> </p>
                        </li>
                        <li class="userData__a">
                            <p> Contact Number :</p><p class="userValue--editable"> </p>
                        </li>
                        <li class="userData__a">
                            <p> Address :</p><p class="userValue--editable"> </p>
                        </li>
                    </ul>
                    <ul>
                        <h2> Professional Information</h2>
                        <li class="userData__a">
                            <p> Profession :</p><p class="userValue--editable"> </p>
                        </li>
                        <li class="userData__a">
                            <p> Workplace :</p><p class="userValue--editable"> </p>
                        </li>
                        <li class="userData__a">
                            <p> Speciality :</p><p class="userValue--editable"> </p>
                        </li>
                        <li class="userData__a">
                            <p> Detail Information :</p><p class="userValue--editable"> </p>
                        </li>
                    </ul>
                    <button class="cards__button submit--button" type=button onclick='changeDetail()'> Done</button>
                    </form>
                </div>
            </div>
        </section>
    </section>
</body>
<script src='refrences/js/fetchUser.js'></script>
<script src='refrences/js/dataChange.js'></script>
<script>
    $(document).ready(function () {
        $(".edit__userData").click(function (e) { 
            e.preventDefault();

            $(".userValue--editable").each(function (index, ele) {
                name = $(ele).prev().text().slice(0,-1);
                text = $(ele).text();
                $(ele).html("<input value='"+text +"' name="+ name +" type=text>")
            });
            
            $(".submit--button").show();
        });
    });
</script>
<script src='refrences/js/userdashboard.js'></script>
</html>