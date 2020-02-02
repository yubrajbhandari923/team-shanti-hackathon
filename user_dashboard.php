<?php
    // To direct users off the page when they are logged off
    define('session-cookie_check',TRUE);
    include 'handle/session-cookie_check.php';
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
    <link rel="stylesheet" href="refrences/css/userdashboard.css">
    <link rel="stylesheet" href="refrences/css/header.css">
    <title>Login</title>
</head>
<body>
    <section class="bodyContainer">
        <header class="sideBar">
            <nav>
                <ul>
                    <li class="headerItem headerItem--active">
                        <i class="fas fa-user"></i>
                    </li>
                    <li class="headerItem"><i class="fas fa-bell"></i></li>
                    <a id='logout'><li class="headerItem">C</li></a>
                    <li class="headerItem headerItem--logOut"><i class="fas fa-sign-out-alt"></i></li>      
                </ul>
            </nav>
        </header>
        <section class="bodyContent">
            <div class="contentHead">
                <h1 >Dashboard</h1>
            </div>
            <div class="userInfo">
                <div class="userInfo__userPP">
                    <div class="userPPcontainer">
                      <p> P </p>
                    </div>
                </div>
                <div class="userInfo__userData">
                    <ul>
                        <h2> Personal Information</h2>
                        <li class="userData__a">
                            <p> UserName :</p><p> Value</p>
                        </li>
                        <li class="userData__a">
                            <p> Fullname :</p><p> Value</p>
                        </li>
                        <li class="userData__a">
                            <p> Email :</p><p> Value</p>
                        </li>
                        <li class="userData__a">
                            <p> Contact Number :</p><p> Value</p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Address :</p><p> Value</p><button class="edit__userData"> edit</button>
                        </li>
                    </ul>
                    <ul>
                        <h2> Professional Information</h2>
                        <li class="userData__a">
                            <p> Profession :</p><p> Value</p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Workplace :</p><p> Value</p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Speciality :</p><p> Value</p><button class="edit__userData"> edit</button>
                        </li>
                        <li class="userData__a">
                            <p> Detail Information :</p><p> Value</p><button class="edit__userData"> edit</button>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
    </section>
</body>
<script src='refrences/js/userdashboard.js'></script>
</html>