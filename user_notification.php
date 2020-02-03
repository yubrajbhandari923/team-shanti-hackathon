<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4b39698392.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="refrences/icons/flaticon.css">
    <link rel="stylesheet" href="refrences/css/usernotification.css">
    <script src='refrences/js/jquery.js'></script>

    <title>Notifications</title>
</head>
<body>
    <section class="bodyContainer">
            <?php include "header.php" ?>

        <section class="bodyContent">
            <div class="contentHead">
                <h1>Notifications!</h1>
            </div>
            <div class="notificationContainer">
                <!-- <div class="a-notification">
                    <p class="notiText"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, nam?</p>
                </div> -->
            </div>
        </section>
        </section>
</body>
<script src='refrences/js/notification.js'></script>
<script>
$(document).ready(function () {
    $("#more-noti").click(()=>{
        alert("dhjh")
        $(".more-notice").slideToggle();
    })
});</script>
</html>