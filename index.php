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
                        <div class="headBar__button">Explore about Nepal</div>
                        <div class="headBar__button">Include my business</div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sliderBar">
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

        <section class="main">
            <div class="main__searchContainer">
                <label> Search for places you like</label>
                <input type="text" onkeyup='searchCard()' id='searchBar'>
            </div>
            <div class="main__resultContainer">
            <div class="cards__cont">
                    <div class="a__card">
                        <div class="card__photo"> 
                            <img src="refrences/imgs/Poonhill.jpg" alt="">
                        </div>
                        <div class="card__textBox">
                        <div class="card__head">
                            <h3>Lorem, ipsum dolor.</h3>
                        </div>
                        <div class="card__subHead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                        </div>
                        </div>
                    </div>
                    <div class="a__card">
                        <div class="card__photo"> 
                            <img src="refrences/imgs/Poonhill.jpg" alt="">
                        </div>
                        <div class="card__textBox">
                        <div class="card__head">
                            <h3>Lorem, ipsum dolor.</h3>
                        </div>
                        <div class="card__subHead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                        </div>
                        </div>
                    </div>
                    <div class="a__card">
                        <div class="card__photo"> 
                            <img src="refrences/imgs/Poonhill.jpg" alt="">
                        </div>
                        <div class="card__textBox">
                        <div class="card__head">
                            <h3>Lorem, ipsum dolor.</h3>
                        </div>
                        <div class="card__subHead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                        </div>
                        </div>
                    </div>
                    <div class="a__card">
                        <div class="card__photo"> 
                            <img src="refrences/imgs/Poonhill.jpg" alt="">
                        </div>
                        <div class="card__textBox">
                        <div class="card__head">
                            <h3>Lorem, ipsum dolor.</h3>
                        </div>
                        <div class="card__subHead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                        </div>
                        </div>
                    </div>
                    <div class="a__card">
                        <div class="card__photo"> 
                            <img src="refrences/imgs/Poonhill.jpg" alt="">
                        </div>
                        <div class="card__textBox">
                        <div class="card__head">
                            <h3>Lorem, ipsum dolor.</h3>
                        </div>
                        <div class="card__subHead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                        </div>
                        </div>
                    </div>
                    <div class="a__card">
                        <div class="card__photo"> 
                            <img src="refrences/imgs/Poonhill.jpg" alt="">
                        </div>
                        <div class="card__textBox">
                        <div class="card__head">
                            <h3>Lorem, ipsum dolor.</h3>
                        </div>
                        <div class="card__subHead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                            <div class="a__tag"> Tag here</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>



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