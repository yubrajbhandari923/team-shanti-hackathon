// function contactChange(){
//     var newContact=
// }
// function registerNepal(){
//     var name=( $("#register input[name=fullname]").val());;
//     var detail=( $("#register textarea").val());
//     var datahold='fullname='+name + '&emailid='+emailid +'&username='+username + '&password='+password + '&phone='+phone + '&address='+address + '&profession='+profession+ '&workplace='+workplace+ '&speciality='+speciality+ '&detail='+detail;
//     $.ajax({
//         type:'POST',
//         url:'handle/register',
//         data:datahold,
//         cache:false,
//         success:function(html){
//             if(html!=='1'){ //1 means Success
//                 console.log(html);
//                 $('#error').show();
//                 $('#error').html(html);
//             }else{
//                 window.location.href='login';
//             }
//         }
//     })
//     return false;
// }