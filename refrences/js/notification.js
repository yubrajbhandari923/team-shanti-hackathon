sendNoti();
function sendNoti(){
    var datahold='notReq='+1;
    $.ajax({
        type:'POST',
        url:'handle/notification',
        data:datahold,
        cache:false,
        success:function(html){
            if(html==1){ //1 means error
                console.log(html);
            }else{
                displayNotification(JSON.parse(html));
            }
        }
    })
    return false;
}
function displayNotification(userNotData){
    userNotData.forEach(ele => {
        document.querySelector(".notificationContainer").innerHTML +=" <div class=a-notification><p class=notiText>"+ ele.notify + "made an you an appointment <span id=more-noti>More</span> <span class=more-notice> <p> Email: " + ele.email+"</p> <p> "+ ele.purpose+"</p></span></p></div>";
        
    });
}
// function printUserInfo(uData){
//     c=0;
//    var infoContainers=document.getElementsByClassName('userData__a');
//    for (x in uData) {
//     infoContainers[c].children[1].innerHTML= uData[x];
//     c+=1;
//   }
// }