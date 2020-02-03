<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> search</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="refrences/css/userCards.css">
    <link rel="stylesheet" href="refrences/css/search.css">
    <link rel="stylesheet" href="refrences/icons/flaticon.css">
</head>
<body>
    
<section class="main">
        <div class="main__searchContainer">
            <label> Search for places you like</label>
            <div style="display: flex">
            <input type="text" id='searchBar'>
            <button type="button" onclick="searchCard()"><i class="flaticon-search"></i></button>
</div>
        </div>
        <div class="main__resultContainer">
            <h2 id='err'></h2>
        <div class="cards__cont">
                <div class="a__card">
                    <a href="#" > <div class="card__photo"> 
                        <img alt="">
                    </div> </a>
                    <div class="card__textBox">
                    <div class="card__head">
                        <h3></h3>
                    </div>
                    <div class="card__subHead">
                        <p></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
    <script src="refrences/js/jquery.js"></script>
    <script src="refrences/js/searchCard.js"></script>
</html>
