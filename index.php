<?php
define('check-user_cookie_check',TRUE);
    include 'handle/check-user_cookie.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title> Guffadi </title>
        <link rel=stylesheet href="refrences/fonts/fonts.css ">
        <link rel=stylesheet href='refrences/css/index-style.css'>
        <script>
            window.onload = function() {
                document.querySelector(".reg-btn").onclick = function(){
                    window.location.href ="register";
                    
                }
                document.querySelector(".log-btn").onclick = function(){
                    window.location.href ="login";
                }
            }
         </script>
    </head>
    <body>
            <section class="container">
                    <section class=hero> 
                        <div class="texts">
                            <h1 class="headtext">Insiders Page
                            <p class="paratext">Join and take Appointments</p>
                        </div>
                        <div class="btn-container">
                            <button class="reg-btn">Create an Account</button>
                            <button class="log-btn">Log In</button>
                        </div>
                    </section>
                </section>
    </body>
    <script src="refrences/js/if_dataDel.js"></script>
</html>