
var App = new function(){
    
    this.validaUsuario = function(){
        var parametros = $("#form-login-app").serialize();
        $.ajax({
            type:'POST',
            dataType:'json',
            data:parametros,
            cache:false,
            url:base_url+'app/verificaDatosLogin',
            success:function(resp){
                 $("#modal_title").empty().html(resp.title);
                $("#modal_body").empty().html(resp.msg);
                $("#modal_info").modal('show');
                /*$('#msg_mod').on('hidden.bs.modal',
                        function () {
                           
                        });*/
            }
        });
    };
};