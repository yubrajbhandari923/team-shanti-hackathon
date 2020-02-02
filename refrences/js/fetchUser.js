// To recieve and send Cookie to fetch data
addquizquestion();
function getCookie(name) {
    function escape(s) { return s.replace(/([.*+?\^${}()|\[\]\/\\])/g, '\\$1'); };
    var match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(name) + '=([^;]*)'));
    return match ? match[1] : null;
}
function addquizquestion(){
    var uId=getCookie('hafhk43');
    var datahold='uid='+uId;
    $.ajax({
        type:'POST',
        url:'handle/fetchUserInfo',
        data:datahold,
        cache:false,
        success:function(html){
            if(html=='1'){ //1 means error
                window.location.href='login';
            }else{
                userInfo=JSON.parse(html);
                printUserInfo(userInfo);
            }
        }
    })
    return false;
}
function printUserInfo(uData){
    c=0;
   var infoContainers=document.getElementsByClassName('userData__a');
   for (x in uData) {
    infoContainers[c].children[1].innerHTML= uData[x];
    c+=1;
  }
}