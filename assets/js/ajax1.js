

$('.customerForm').on('submit', function(){

    var customerName = $('#customerName').val();
    var customerEmail = $('#customerEmail').val();
    var customerPhone = $('#customerPhone').val();
    var customerMessage = $('#customerMessage').val();

    if(customerName=='' || customerEmail=='' || customerPhone=='' || customerMessage==''){
        $('#success').html("");
        $('#error').html("كل الحقول مطلوبة");
    }
    else {
        var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

        that.find('[name]').each(function(index,value){
            var that = $(this),
                name = that.attr('name'),
                value = that.val();

            data[name] = value;
        });

        $.ajax({
            url:url,
            type:type,
            data:data,
            success:function(response){
                $(".customerForm").trigger("reset");
                $('#error').html('');
                $('#success').fadeIn().html("Data is saved");
                setTimeout(() => {
                    $("#success").fadeOut('slow');
                }, 3000);
            }
        });
    }
    return false;
});


