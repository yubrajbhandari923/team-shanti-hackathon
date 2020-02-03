<<<<<<< HEAD
<?php
    // To direct users off the page when they are logged off
    define('session-cookie_check',TRUE);
    include 'handle/session-cookie_check.php';
?>
=======
>>>>>>> Appointment Page second last stage
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
<<<<<<< HEAD
    <link rel="stylesheet" href="refrences/css/user-profile.css">
    <script src='refrences/js/jquery.js'></script>
    <script src='refrences/js/fetchUser.js'></script>
=======
<<<<<<< HEAD:user_dashboard.php
=======
    <link rel="stylesheet" href="refrences/css/user-profile.css">
    <link rel="stylesheet" href="refrences/css/header.css">
>>>>>>> Appointment Page second last stage:user_profile.php
    <script src='refrences/js/jquery.js'></script>
    <script src='refrences/js/userCardDashboard.js'></script>
>>>>>>> Appointment Page second last stage
    <title>Login</title>
</head>
<body>
    <section class="bodyContainer">
<<<<<<< HEAD
    <?php include "header.php" ?>
=======
>>>>>>> Appointment Page second last stage

        <section class="bodyContent">
            <div class="contentHead">
                <h1 >Dashboard</h1>
            </div>
            <div class="userInfo">
                <div class="userInfo__userPP">
                    <div class="userPPcontainer">
                       <h1>P</h1> 
                    </div>
                </div>
                <div class="userInfo__userData">
<<<<<<< HEAD
                    <div class="userInfo__appointButtContain">
                        <button class="userInfo__appointButt"> Take an appointment</button>
                    </div>
                    <form class="cardAdd" id="cardForm">
                            <div><label for="name">Enter Your Name</label><input type="text" name='name'></div>
                            <div><label for="email">Enter email</label><input type="text" name='email'></div>
                            <div><label for="purpose">Purpose</label><input type="textarea" name='purpose'> <button class="cards__button" type="button" id='submitCard' onclick='sendPic()'> Send</button></div>
                        </form>
=======
>>>>>>> Appointment Page second last stage
                    <ul>
                        <h2> Personal Information</h2>
                        <li class="userData__a">
                            <p> Fullname :</p><p></p>
<<<<<<< HEAD
                        </li>
                        <li class="userData__a">
                            <p> UserName :</p><p> </p>
                        </li>
=======
                        </li>                        
>>>>>>> Appointment Page second last stage
                        <li class="userData__a">
                            <p> Email :</p><p> </p>
                        </li>
                        <li class="userData__a">
<<<<<<< HEAD
                            <p> Contact Number :</p><p> </p>
                        </li>
                        <li class="userData__a">
                            <p> Address :</p><p> </p>
=======
                            <p> Contact Number :</p><p> </p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Address :</p><p> </p><button class="edit__userData"> edit</button>
>>>>>>> Appointment Page second last stage
                        </li>
                    </ul>
                    <ul>
                        <h2> Professional Information</h2>
                        <li class="userData__a">
<<<<<<< HEAD
                            <p> Profession :</p><p> </p>
                        </li>
                        <li class="userData__a">
                            <p> Workplace :</p><p> </p>
                        </li>
                        <li class="userData__a">
                            <p> Speciality :</p><p> </p>
                        </li>
                        <li class="userData__a">
                            <p> Detail Information :</p><p> </p>
=======
                            <p> Profession :</p><p> </p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Workplace :</p><p> </p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Speciality :</p><p> </p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Detail Information :</p><p> </p><button class="edit__userData"> edit</button>
>>>>>>> Appointment Page second last stage
                        </li>
                    </ul>

                </div>
            </div>
        </section>
    </section>
</body>
<<<<<<< HEAD
<script>
    $(document).ready(function () {
        $(".userInfo__appointButt").click(function (e) { 
            e.preventDefault();
            $("form").slideToggle();
        });
    });
</script>
=======
<!-- <script src='refrences/js/userdashboard.js'></script> -->
>>>>>>> Appointment Page second last stage
</html>