// To send Cards data using JS
document.querySelector('#cardForm button').addEventListener('click',sendPic);
function sendPic(){
    var file_data = $('#cardForm input[type=file]').prop('files')[0];
    var form_data = new FormData();
    var headText=$('#cardForm input[name=headText]').val();
    var subText=$('#cardForm input[name=subText]').val();
    form_data.append('file', file_data);
    var datahold=form_data+'&headText='+headText+'&subText='+subText;
    $.ajax({
        url: 'handle/addCards',
        type:'POST',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: datahold,
        type: 'post',
        success: function(html){
            if(html){
                console.log(html);
            }
        }
    })
    return form_data;
}