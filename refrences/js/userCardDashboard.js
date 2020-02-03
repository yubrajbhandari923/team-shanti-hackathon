// To recieve and send Cookie to fetch data
fetchUserInfoFromDB();
function fetchUserInfoFromDB(){
    var uId=2;
    // $_GET['udt']
    var datahold='uid='+uId;
    $.ajax({
        type:'POST',
        url:'handle/fetchAfterCardUser',
        data:datahold,
        cache:false,
        success:function(html){
            if(html=='1'){ //1 means error
                window.location.href='search';
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

// Function to get Get variables
var $_GET = {};
if(document.location.toString().indexOf('?') !== -1) {
    var query = document.location
                   .toString()
                   // get the query string
                   .replace(/^.*?\?/, '')
                   .replace(/#.*$/, '')
                   .split('&');

    for(var i=0, l=query.length; i<l; i++) {
       var aux = decodeURIComponent(query[i]).split('=');
       $_GET[aux[0]] = aux[1];
    }
}