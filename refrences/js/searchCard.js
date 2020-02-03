function searchCard(){
    datahold='query='+document.querySelector('#searchBar').value;
    $.ajax({
        type:'POST',
        url:'handle/searchCard',
        data:datahold,
        cache:false,
        success:function(html){
            if(html){
                console.log(JSON.parse(html));
            }else{
                // manageCards(JSON.parse(html));
            }
        }
    })
    return false;
}