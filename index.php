<?php
define('check-user_cookie_check',TRUE);
    include 'handle/check-user_cookie.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title> TS </title>
        <link rel=stylesheet href='refrences/css/index-style.css'>
        <link rel=stylesheet href='refrences/css/userCards.css'>
        <link rel=stylesheet href='refrences/icons/flaticon.css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">    
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src='refrences/js/searchCard.js'></script>
    </head>
    <body>
        <section class="headBar">
            <div class="headBar__container">
                <div class="headBar__photo">
                    <img src="refrences/imgs/kumari.jpg" >
                </div>
                <div class="headBar__textField">
                    <div class="headBar__vnylogo"><img src="refrences/imgs/vnylogo.png" ></div>
                    <div class="headBar__buttons">
                       <a href="search.php"><div class="headBar__button"> <i class="flaticon-search"></i> Find about your interest in Nepal</div></a>
                       <a href="login.php"><div class="headBar__button">Include my business</div></a>
                       <a href="#sliderBar"><div style="text-align: center; font-size:35px; font-weight: bolder; color: black;"><i class="flaticon-down-arrow"></i></div></a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sliderBar" id="sliderBar">
            <div class="sliderBar__sideNav">
                <div class="sliderBar__navButton"></div>
                <div class="sliderBar__navButton"></div>
                <div class="sliderBar__navButton"></div>
                <div class="sliderBar__navButton"></div>
                    <div class="sliderBar__navButton"></div>
                </div>
                <div class="sliderBar__bg"></div>
            <div class="sliderBar__slides">
                <div class="sliderBar__slide">
                    <div data-aos="fade-up" data-aos-delay=400 class="sliderBar__slideHead">Lorem, ipsum dolor.</div>
                    <div data-aos="fade-up" data-aos-delay=800 class="sliderBar__slideContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium libero, totam magnam rem delectus praesentium. Asperiores dolore illo dolor aut.</div>
                    <div data-aos="fade-up" data-aos-delay=600 class="sliderBar__slidePhoto"><img src="refrences/imgs/Kumari.jpg" alt=""></div>
                </div>
                <div class="sliderBar__slide">
                    <div data-aos="fade-up" data-aos-delay=400 class="sliderBar__slideHead">Lorem, ipsum dolor.</div>
                    <div data-aos="fade-up" data-aos-delay=800 class="sliderBar__slideContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium libero, totam magnam rem delectus praesentium. Asperiores dolore illo dolor aut.</div>
                    <div data-aos="fade-up" data-aos-delay=600 class="sliderBar__slidePhoto"><img src="refrences/imgs/Kumari.jpg" alt=""></div>
                </div>
                <div class="sliderBar__slide">
                    <div data-aos="fade-up" data-aos-delay=400 class="sliderBar__slideHead">Lorem, ipsum dolor.</div>
                    <div data-aos="fade-up" data-aos-delay=800 class="sliderBar__slideContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium libero, totam magnam rem delectus praesentium. Asperiores dolore illo dolor aut.</div>
                    <div data-aos="fade-up" data-aos-delay=600 class="sliderBar__slidePhoto"><img src="refrences/imgs/Kumari.jpg" alt=""></div>
                </div>
                <div class="sliderBar__slide">
                    <div data-aos="fade-up" data-aos-delay=400 class="sliderBar__slideHead">Lorem, ipsum dolor.</div>
                    <div data-aos="fade-up" data-aos-delay=800 class="sliderBar__slideContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium libero, totam magnam rem delectus praesentium. Asperiores dolore illo dolor aut.</div>
                    <div data-aos="fade-up" data-aos-delay=600 class="sliderBar__slidePhoto"><img src="refrences/imgs/Kumari.jpg" alt=""></div>
                </div>
                <div class="sliderBar__slide">
                    <div data-aos="fade-up" data-aos-delay=400 class="sliderBar__slideHead">Lorem, ipsum dolor.</div>
                    <div data-aos="fade-up" data-aos-delay=800 class="sliderBar__slideContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium libero, totam magnam rem delectus praesentium. Asperiores dolore illo dolor aut.</div>
                    <div data-aos="fade-up" data-aos-delay=600 class="sliderBar__slidePhoto"><img src="refrences/imgs/Kumari.jpg" alt=""></div>
                </div>
            </div>
        </section>
        <section class="finalBar">
            <div class="finalBar__container">
                <h1>Wanna Learn about local services of specific places? </h1>
                <a href="search.php"><div class="headBar__button"> <i class="flaticon-search"></i> Find about your interest in Nepal</div></a>
                
                <h1>Or Want to include about your business, place or local product? </h1>
                <a href="login.php"><div class="headBar__button">Include my business</div></a>
                
            </div>
        </section>
        <footer>
            
            </footer>
            <div class="search__container">
                <div class="search__hero">
                <p></p>
            </div>
        </div>


            <!-- <section class="container">
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
            </section> -->
    </body>

    <script src="refrences/js/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- <script src="refrences/js/if_dataDel.js"></script> -->
    <script>
          AOS.init();

        $(document).ready(function () {
            
        });
        

        window.onscroll = function(){
            if(document.documentElement.scrollTop > document.querySelector(".sliderBar").offsetTop && document.documentElement.scrollTop < (document.querySelector(".sliderBar").offsetTop+document.querySelector(".sliderBar").offsetHeight - document.documentElement.clientHeight) ){
                document.querySelector(".sliderBar__sideNav").style.position = "fixed";
                document.querySelector(".sliderBar__bg").style.position = "fixed";
                let scrollAmount = document.documentElement.scrollTop;
                $(".sliderBar__slide").each((ind, ele) => {
                    up = ele.offsetTop + document.querySelector(".sliderBar").offsetTop
                    if(range(up, document.documentElement.scrollTop)){
                        console.log("ok")
                        $(".sliderBar__navButton").each((i,e) =>{
                            e.classList.remove("sliderBar__navButton--active");
                        })
                    
                        document.querySelectorAll(".sliderBar__navButton")[ind].classList.add("sliderBar__navButton--active")
                    }
                })

            } else {
                document.querySelector(".sliderBar__sideNav").style.position = "absolute";
                document.querySelector(".sliderBar__bg").style.position = "absolute";

            }
            
        }
         
        function range(around, number){
            return number >=(around - 100) && number <=(around + 100);
        }
    </script>
    </html>