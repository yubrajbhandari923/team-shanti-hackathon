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
    <link rel="stylesheet" href="refrences/css/userCards.css">
    <script src="js/jquery.js"></script>
    <title>My Cards</title>
</head>
<body>
    <section class="bodyContainer">
       <?php include "header.php" ?>
        <section class="bodyContent">
            <div class="contentHead">
                <h1>Manage Cards</h1>
            </div>
            <section class="cards">
                <div class="cards__nav">
                    <button class="cards__button cards__button--add"> + Add Cards </button>
                    <button class="cards__button cards__button--remove"> Remove Cards </button>
                </div>
                <form class="cardAdd" id="cardForm">
                    <div><label for="Photo">Add a Photo</label><input type="file"></div>
                    <div><label for="head">Add Heading</label><input type="text" name='headText'></div>
                    <div><label for="subhead">Add a subhead</label><input type="text" name='subText'></div>
                    <div><label for="Tags">Add Tags</label><input type="text"> <button class="cards__button" type="button"> Add </button></div>
                </form>
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
                </div>
            </section>
        </section>
   </section>
    

    </body>
    <script>   
    $().ready(()=>{
        $(".cards__button--add").click(()=>{
            $(".cardAdd").slideDown(1000);
        });
        $("input[type=tags]").change(()=>{
            let a = $(this).val()
            console.log(a.split(","));
        })
    })
    
    </script>
</html>