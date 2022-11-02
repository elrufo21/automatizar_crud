$(document).on("click","#bnt_crear",function(){
    var data = $(".form_automatizar").serialize();
    $.ajax({
        type:'POST',
        url:'controller_func/automatizar_crud/accion.php',
        data:data,
        success:function(data){
            if(data.trim()=="true"){
                alert("Esta bien");
            }else{
                alert(data);
            }
        }
    })
})