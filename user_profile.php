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
    <link rel="stylesheet" href="refrences/css/user-profile.css">
    <link rel="stylesheet" href="refrences/css/header.css">
    <script src='refrences/js/jquery.js'></script>
    <script src='refrences/js/userCardDashboard.js'></script>
    <script src='refrences/js/sendAppointment.js'></script>
    <title>Login</title>
</head>
<body>
    <section class="bodyContainer">

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
                    <div class="userInfo__appointButtContain">
                        <button class="userInfo__appointButt"> Take an appointment</button>
                    </div>
                    <form class="cardAdd" id="cardForm">
                            <div><label for="name">Enter Your Name</label><input type="text" name='name'></div>
                            <div><label for="email">Enter email</label><input type="text" name='email'></div>
                            <div><label for="purpose">Purpose</label><input type="textarea" name='purpose'> <button class="cards__button" type="button" id='submitCard' onclick='sendAppointment()'> Send</button></div>
                        </form>
                    <ul>
                        <h2> Personal Information</h2>
                        <li class="userData__a">
                            <p> Fullname :</p><p></p>
                        </li>                        
                        <li class="userData__a">
                            <p> Email :</p><p> </p>
                        </li>
                        <li class="userData__a">
                            <p> Contact Number :</p><p> </p>
                        </li>
                        <li class="userData__a">
                            <p> Address :</p><p> </p>
                        </li>
                    </ul>
                    <ul>
                        <h2> Professional Information</h2>
                        <li class="userData__a">
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
                        </li>
                    </ul>

                </div>
            </div>
        </section>
    </section>
</body>
<script>
    $(document).ready(function () {
        $(".userInfo__appointButt").click(function (e) { 
            e.preventDefault();
            $("form").slideToggle();
        });
    });
</script>
</html>