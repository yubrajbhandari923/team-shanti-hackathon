displayCards();
function displayCards(){
    datahold='data='+true;
    $.ajax({
        type:'POST',
        url:'handle/displayCards',
        data:datahold,
        cache:false,
        success:function(html){
            if(html==1){
                document.querySelector('.card__head h3').innerHTML='No cards.Add new cards';
            }else{
                manageCards(JSON.parse(html));
            }
        }
    })
    return false;
}
function manageCards(uData){
    noofItems=uData.length;
    var itm = document.getElementById("cardsCont");
    var item=document.querySelector('.a__tag')
    for(i=0;i<noofItems-1;i++){
        var cln = itm.cloneNode(true);
        document.getElementById("cardCon").appendChild(cln);
    }
    var cardContainer=document.getElementsByClassName('a__card');
    for(j=0;j<noofItems;j++){
        cardContainer[j].querySelector('.card__photo img').setAttribute('src',uData[j].img_dir);
        cardContainer[j].querySelector('.card__head h3').innerHTML=uData[j].headText;
        cardContainer[j].querySelector('.card__subHead p').innerHTML=uData[j].subText;
        cardContainer[j].querySelector('.card__subHead p').innerHTML=uData[j].subText;
        var tagArr=uData[j].tags.split(',');
        var tagLen=tagArr.length;
        for(i=0;i<tagLen-1;i++){
            var clone=item.cloneNode(true);
            cardContainer[j].querySelector('.card__tags').appendChild(clone);
        }
        currTagsArr=uData[j].tags.split(',');
        // currArrayInsider
        for(i=0;i<currTagsArr.length;i++){
            cardContainer[j].getElementsByClassName('a__tag')[i].innerHTML=currTagsArr[i];
        }
    }
}