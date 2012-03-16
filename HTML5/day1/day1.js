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
    $("#respuesta").html($("#respuesta").html().replace( name , '<span style="text-decoration: underline">' +name + '</span>'));
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
    var url = "http://localhost/app/HTML5/api/dispatcher.php";
    $.ajax(url, {        
            data: {service: 'movie.getTop', params: {'name': 'movies'}},
            dataType: 'json' ,
            success: function(data) {
                var obj = data;
                var html = '<h2>Lista de películas</h2>';
                var i=0;
                while (obj[i]!= null) {                    
                    html += "<div><b>"+obj[i].Name+"</b> ("+obj[i].ReleaseYear+")";
                    html += "<h2><img src='"+obj[i].BoxArt.SmallUrl+"' /></h2>";
                    html += "<p>"+obj[i].Synopsis+"</p></div>";
                    ++i;
                } 
                $("#respuesta").html(html);
            }

    });
}