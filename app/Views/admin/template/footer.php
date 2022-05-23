
</div>
<script src="/assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/assets/admin/dist/js/adminlte.js"></script>
<script src="/assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/admin/plugins/raphael/raphael.min.js"></script>
<script src="/assets/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="/assets/admin/dist/js/pages/dashboard2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    var forms = $("form")
    var preloader = $(".preloader");
    $(function() {
        $('#historia, #storie').summernote({
            height: 200,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });

    forms.on("submit",function(e){
        e.preventDefault();
        toggleLoader(true);
        let postData = $(this).serializeArray();
        switch ($(this).attr("id")){
            case "story/create" :
            postData.push({
                name:"description_es",
                value : $("#historia").val()
            },{
                name:"description_en",
                value : $("#storie").val()
            });
            break;
            case "slider/create" :break;
            case "user/create":
                if(!inputMatch()){
                    alert("las contraseñas no coinciden");
                    toggleLoader(false);
                    return false;
                }
                break;
        }

        request(this,postData);
    });

});
function request(form,postData)
{
    let $form = $(form);
    var settings = {
        method : $form.attr("method"),
        url : '<?=base_url()?>/'+$form.attr("id"),
        dataType : "JSON",
        data:postData,
        statusCode :{
            400 : function(){
                toggleLoader(false);
                alert("se envió mal");
            },
            500 : function(){
                toggleLoader(false);
                alert("falló en el servidor ");
            },
            404: function(){
                toggleLoader(false);
                alert("Ruta o recurso no encontrado");
            }
        }
    }
    $.ajax(settings).done(function(response){
        console.log(response);
        if(response.success)
        {
            toggleLoader(false);
            alert(response.message);
        }
    })


}
function toggleLoader(on)
{

    on?preloader.css("height","").children().show():preloader.css("height","0").children().hide();
}
    function inputMatch()
    {
        let match = false
        let i = $("#pass").val();
        let c = $("#passMatch").val();

        if(i!==c && i!=="" && c !== ""){
            $("#notMatch").show();
            match = false ;
        }
        else{
            $("#notMatch").hide();
            match = true ;
        }

        return match
    }
</script>

</script>
</body>
</html>