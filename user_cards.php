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
    <script src="refrences/js/jquery.js"></script>
    <script src="refrences/js/autoDisplayCards.js"></script>
    <script src="refrences/js/sendCards.js"></script>
    <title>My Cards</title>
</head>
<body>
    <section class="bodyContainer">
       <?php include "header.php" ?>
        <section class="bodyContent">
            <div class="contentHead">
                <h1>Manage Cards</h1>
            </div>
            <section class="cards" id='cardCon'>
                <div class="cards__nav">
                    <button class="cards__button cards__button--add"> + Add Cards </button>
                </div>
                <form class="cardAdd" id="cardForm">
                    <div><label for="Photo">Add a Photo</label><input type="file"></div>
                    <div><label for="head">Add Heading</label><input type="text" name='headText'></div>
                    <div><label for="subhead">Add a subhead</label><input type="text" name='subText'></div>
                    <div><label for="Tags">Add Tags</label><input type="text" name='tags'> <button class="cards__button" type="button" id='submitCard' onclick='sendPic()'> Add </button></div>
                </form>
                <div class="cards__cont" id='cardsCont'>
                    <div class="a__card">
                    <div class="remove__icon">
                    <i class="flaticon-cancel"></i>
                    </div>    
                    <div class="card__photo"> 
                            <img src="" alt="">
                        </div>

                        <div class="card__textBox">
                        <div class="card__head">
                            <h3></h3>
                        </div>
                        <div class="card__subHead">
                            <p></p>
                        </div>
                        <div class="card__tags">
                            <div class="a__tag"></div>
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
        $(".remove__icon").click(function (e) { 
            e.preventDefault();

        });    
    })
    </script>
</html>