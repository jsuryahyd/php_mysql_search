$('#grab').on('click',function(){
    var q = $.trim($('#name').val());
    if(q != ""){
        $.ajax({
            url:"grab_server.php?name="+q,
            method:"GET",
            success:function(data){
                $('.result').html(data)
            }
        })

        
    }
})