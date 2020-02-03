function changeDetail(){
    var contact=$(".userInfo__userData input[name=Contact]").val();
    var address=$(".userInfo__userData input[name=Address]").val();
    var profession=$(".userInfo__userData input[name=Profession]").val();
    var workplace=$(".userInfo__userData input[name=Workplace]").val();
    var speciality=$(".userInfo__userData input[name=Speciality]").val();
    var detail=$(".userInfo__userData input[name=Detail]").val();
    var datahold='contact='+contact + '&address='+address +'&profession='+profession +'&workplace='+workplace+ '&speciality='+speciality+ '&detail='+detail;
    $.ajax({
        type:'POST',
        url:'handle/changeDetail',
        data:datahold,
        cache:false,
        success:function(html){
            if(html==1){
                window.location.reload();
            }else{
                alert(html);
            }
        }
    })
    return false;
}