
$('.formr').on('submit', function(){

    var name = $('#name').val();
    var country = $('#country').val();
    var email = $('#email').val();
    var jop = $('#jop').val();
    var phone = $('#phone').val();
    var details = $('#details').val();
    var type = $('#type').val();
    var cost = $('#cost').val();

    if(name=='' || country=='' || email=='' || jop=='' || phone=='' || details=='' || type=='' || cost==''){
        $('#success').html("");
        $('#error').html("كل الحقول مطلوبة");
    }
    else

    {var that = $(this),
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
                $(".formr").trigger("reset");
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

/************************* */

