// To send Cards data using JS
function sendPic(){
    var file_data = $('#cardForm input[type=file]').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    fake_path=document.querySelector('#cardForm input[type=file]').value
    sendtext(fake_path.split("\\").pop());
    $.ajax({
        url: 'handle/addCards',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(html){
            if(html){
                console.log(html);
            }
        }
    })
    return false;
}

function sendtext(fileName){
    var textHead=document.querySelector('#cardForm input[name=headText').value;
    var subText=document.querySelector('#cardForm input[name=subText').value;
    var datahold='subText='+subText+'&headText='+textHead;
    $.ajax({
        url: 'handle/addText',
        dataType: 'text',
        cache: false,
        data: datahold,
        type: 'post',
        success: function(html){
            if(html){
                console.log(html);
            }
        }
    })
    return false;
}