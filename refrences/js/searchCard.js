$('.a__card').hide();
function searchCard(){
    datahold='query='+document.querySelector('#searchBar').value;
    $.ajax({
        type:'POST',
        url:'handle/searchCard',
        data:datahold,
        cache:false,
        success:function(html){
            if(html==1){
                $('.a__card').hide();
                document.querySelector('#err').innerHTML='Sorry!No result found';

            }else{
                displaYCard(JSON.parse(html));
            }
        }
    })
    return false;
}

function displaYCard(dataOfCard){
    afterExecute();
    $('.a__card').show();
    var item=document.querySelector('.a__card');
    for(i=0;i<dataOfCard.length-1;i++){
        var clone=item.cloneNode(true);
        document.querySelector('.cards__cont').appendChild(clone);
    }
    var cardSelect=document.getElementsByClassName('a__card');
    for(i=0;i<dataOfCard.length;i++){
        cardSelect[i].querySelector('.card__photo img').setAttribute('src',dataOfCard[i].img_dir);
        cardSelect[i].querySelector('.card__head h3').innerHTML=dataOfCard[i].headText;
        cardSelect[i].querySelector('.card__subHead p').innerHTML=dataOfCard[i].subText;
        var uLoc='user_profile?udt='+dataOfCard[i].id;
        cardSelect[i].querySelector('.a__card a').setAttribute('href',uLoc);
    }
}

function afterExecute(){
    document.querySelector('#err').innerHTML='';
    console.log('deleted');
    var contain=document.getElementsByClassName('a__card');
    for(i=0;i<contain.length-1;i++){
        $(contain)[i].remove();
    }
}