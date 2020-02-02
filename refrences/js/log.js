document.querySelector('#submit').addEventListener('click',function(){
    addquizquestion();
})
function addquizquestion(){
    var name=( $("#register input[name=fullname]").val());
    var emailid=( $("#register input[name=emailid]").val());
    var username=( $("#register input[name=username]").val());
    var password=( $("#register input[name=password]").val());
    var phone=( $("#register input[name=phone]").val());
    var address=( $("#register input[name=address]").val());
    var profession=( $("#register input[name=profession]").val());
    var workplace=( $("#register input[name=workplace]").val());
    var speciality=( $("#register input[name=speciality]").val());
    var detail=( $("#register textarea").val());
    var datahold='fullname='+name + '&emailid='+emailid +'&username='+username + '&password='+password + '&phone='+phone + '&address='+address + '&profession='+profession+ '&workplace='+workplace+ '&speciality='+speciality+ '&detail='+detail;
    $.ajax({
        type:'POST',
        url:'handle/register',
        data:datahold,
        cache:false,
        success:function(html){
            if(html!=='1'){ //1 means Success
                console.log(html);
                $('#error').show();
                $('#error').html(html);
            }else{
                window.location.href='login';
            }
        }
    })
    return false;
}