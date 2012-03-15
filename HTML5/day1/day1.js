//Punto 2
$(document).ready(function (){
               alert("The page is loaded.");
               document.getElementById('alias').focus();               
});
//Punto 5) 6)
$("#botonRespuesta").click(function(){ 
                var param = $("#alias").val();
                var url = "http://localhost/app/HTML5/api/dispatcher.php";
                //url = "url error";
                $.post(url, {service: 'welcome.hello', params: {name: param}}, function(data){
                                                                                $("#respuesta").html(data);
                                                                                //Llamar al punto 8)
                                                                                subrayarNombre ();
                                                                               });
});
//Llamamos a click del boton apretando enter en alias tmb para hacerlo mas rapido
$("#alias").keypress(function(event) {
    if (event.which == 13) {
        $("#botonRespuesta").click();
    }
});

//Punto 8)
function subrayarNombre (){
    var name = $("#alias").val();
    $("#respuesta").html().replace( name , '<span style="text-decoration: underline">' +name + '</span>');
}
//Punto 7)
/*
 * Extraido de: http://api.jquery.com/ajaxError/
 * 
 * cambiar la url para que esta función se active
 * 
 */ 
$("#respuesta").ajaxError(function(event, request, settings){
  $(this).html("<span>Error leyendo de " + settings.url + "</span>");
  var properties = {
         "background-color": "#ddd",
         "font-weight": "bold",
         "color" : "red"
       }
   $(this).css(properties);
});

//Punto 9)
function respuestaMovies (){
    $.ajax({
        url: "http://localhost/app/HTML5/api/dispatcher.php",
        contentType: "application/json",
        data: {service: 'movie.getTop'},
        dataType: "json",
        success: function(data){
            var JSONobject= eval(data);
            for (var i = 0 ; i < 5; i++) {
                setTimeout(showMovie(JSONobject,i),2500);
            };
        }
    });
}
function showMovie(JSONobject,i){
    var title= JSONobject[i].ShortName;
    var year= JSONobject[i].ReleaseYear;
    var sinop= JSONobject[i].ShortSynopsis;
    var img= JSONobject[i].BoxArt.SmallUrl;
    var all= img+title + year + sinop;
    $("#respuesta").html(all);
}