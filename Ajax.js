$("#sub").click(function()){
    var data=$("#myform2:input").serializeArray();
    $post($("#myform2").attr("action"),data,function(info){$( "#result").html(info);});
    clearinput();
}
$(#myform2).submit(function(){
    return false
});
function clearinput(){
    $("#myform2:input").each(function(){
        $(this).val('');
    });
}