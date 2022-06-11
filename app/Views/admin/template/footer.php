
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
<script src="/assets/dropify/js/dropify.js"></script>

<script>
    var forms = $("form")
    var preloader = $(".preloader");
    var host = '<?=base_url()?>';
    $(function() {
        $('#historia, #storie,#storieUpdate').summernote({
            height: 200,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });

    forms.on("submit",function(e){
        e.preventDefault();
        debugger;
        toggleLoader(true);
        let postData = $(this).serializeArray();
        debugger;
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

    $(".dropify").dropify();
    $(".dropify").on("change",function(){
       let formData = new FormData();
       formData.append("slider",$(this)[0].files[0])
    });

    $(".modal").on('show.bs.modal',function(e){
        console.log(e);
        debugger;
         let storage  = $(e.relatedTarget).data("controller");
         let sliderNumber  = $(e.relatedTarget).data("slider");
         let sliderObj = JSON.parse( localStorage.getItem(storage));
        console.log(sliderObj[sliderNumber-1]);
        $("#slider-link_en").val(sliderObj[sliderNumber-1].link_en);
        $("#slider-text_en").val(sliderObj[sliderNumber-1].textBtn_en);
        $("#slider-link_es").val(sliderObj[sliderNumber-1].link_es);
        $("#slider-text_es").val(sliderObj[sliderNumber-1].textBtn_es);
        $("#slider-id").val(sliderObj[sliderNumber-1].id);

    });
    $("input[id^='slider']").on("change",function(e){
       e.preventDefault();
       debugger;
       let controller = "slider";
       let id = $("#slider-id").val();
       let field = $(this).attr("name");
       let value = $(this).val();
       updateInfo(controller,id,field,value);

    });
    $("#update-screen").click(function(e){
        e.preventDefault();
        location.reload();
    })

});
function updateSlider(element)
{
    debugger;
    let $data = new FormData();
    let $id = $(element).attr("data-path").split("-")[1];
    $data.append("id",$id);
    $data.append("slider",$(element)[0].files[0])
    $data.append("field","routeImg")
    $data.append("value","file")
    console.log($id);
    $.ajax({
        method : "POST",
        url : host+'/slider/update/routeImg',
        dataType : "JSON",
        data:$data,
        processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType
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
    }).done(function(response){
        if(response.success){
            console.log(response.message);
        }
    });


}
function updateInfo(controller,id,field,value)
{
    $.ajax({
        method:"POST",
        url: host+"/"+controller+"/update/"+field,
        data: {id:id,value:value},
        dataType : "JSON",
    }).done(function(response){
        console.log(response);
        //let objToUpd = JSON.parse( localStorage.getItem(controller));

    });



}
function request(form,postData)
{
    let $form = $(form);
    var settings = {
        method : $form.attr("method"),
        url : host+"/"+$form.attr("id"),
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
    if($form.attr("id")==="story/create"){
        let formData = new FormData($form[0]);
        formData.append("description_es", $("#historia").val());
        formData.append("description_en", $("#storie").val());
        settings.data = formData;
        settings.contentType = false;
        settings.cache = false;
        settings.processData = false;
    }
    $.ajax(settings).done(function(response){
        console.log(response);
        toggleLoader(false);
        alert(response.message);

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
function updateNumber(element)
{

    let id = $(element).attr("data-table");
    let field = $(element).attr("name");
    let value = $(this).is("textarea")?$(element).text():$(element).val();


    $.ajax({
        method :"POST",
        url : host+"/number/update",
        data :{id:id,field:field, value:value},
        dataType :"JSON"
    }).done(function(response){
        console.log(response);
    })
}


</script>
