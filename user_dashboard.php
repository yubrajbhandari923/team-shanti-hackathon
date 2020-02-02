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
        <section class="bodyContainer"></section>
    </section>
</body>
<script src='refrences/js/userdashboard.js'></script>
</html>