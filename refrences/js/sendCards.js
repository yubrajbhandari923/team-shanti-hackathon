// To send Cards data using JS
function sendPic(){
    var file_data = $('#cardForm input[type=file]').prop('files')[0];
    // var form_data = new FormData();
    // form_data.append('file', file_data);
    var headText=$('#cardForm input[name=headText]').val();
    var subText=$('#cardForm input[name=subText]').val();
    var tags='tags';
    var datahold='file='+file_data+'&headText='+headText+'&subText='+subText+'&tags='+tags;
    console.log(datahold);
    $.ajax({
        url: 'handle/addCards',
        cache: false,
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