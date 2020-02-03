function registerNepal(){
    // var name=( $("#register input[name=fullname]").val());;
    // var detail=( $("#register textarea").val());
    var datahold='contact='+contact + '&address='+address +'&profession='+profession +'&workplace='+workplace+ '&speciality='+speciality+ '&detail='+detail;
    $.ajax({
        type:'POST',
        url:'handle/changeDetail',
        data:datahold,
        cache:false,
        success:function(html){
            if(html==1){ //1 means FAil
                alert(html);
            }else{
                window.location.reload();
            }
        }
    })
    return false;
}