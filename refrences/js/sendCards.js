// To send Cards data using JS
function sendPic(){
    var file_data = $('#cardForm input[type=file]').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    fake_path=document.querySelector('#cardForm input[type=file]').value
    $.ajax({
        url: 'handle/addCards',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(html){
            if(html==1){//IF success
                sendtext(fake_path.split("\\").pop());
            }else{
                console.log('There is an error'+html);
            }
        }
    })
    return false;
}

function sendtext(fileName){
    var textHead=document.querySelector('#cardForm input[name=headText').value;
    var subText=document.querySelector('#cardForm input[name=subText').value;
        var a = $("#cardForm input[name=tags").val()
        var tags=(a.split(","));
    var datahold='subText='+subText+'&headText='+textHead+'&tags='+tags+'&fileDir='+fileName;
    console.log(datahold);
    $.ajax({
        url: 'handle/addText',
        cache: false,
        data: datahold,
        type: 'post',
        success: function(html){
            if(html==1){
                window.location.reload();
            }else{
                console.log('error'+html);
            }
        }
    })
    return false;
}