$("#submit").on('click', function(){
    $.ajax({
        url: 'http://localhost/guvi/php/register.php',
        type: 'POST',
        data: $("form2").serialize(),
        success:function(response){

        }
    })
})