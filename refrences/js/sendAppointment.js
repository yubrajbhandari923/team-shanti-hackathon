// To recieve and send Cookie to fetch data
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
function sendAppointment(){
    console.log('exe');
    var uid=$_GET['udt'];
    var name=document.querySelector('#cardForm input[name=name').value;
    var email=document.querySelector('#cardForm input[name=email').value;
    var purpose=document.querySelector('#cardForm input[name=purpose').value;
    var datahold='name='+name+'&email='+email+'&purpose='+purpose+'&uid='+uid;
    $.ajax({
        url: 'handle/takeAppointment',
        cache: false,
        data: datahold,
        type: 'post',
        success: function(html){
            if(html==1){
                alert('Your appointment is requested');
                window.location.reload();
            }else{
                alert('Fill up all the form');
            }
        }
    })
    return false;
}