//Punto 2
$(document).ready(function Loaded (){
               window.alert("The page is loaded.");
               document.getElementById('alias').focus();               
});
//Punto 5) 6)
$("#botonRespuesta").click(function magic(){ 
                var param = $("#alias").val();
                url = "http://localhost/app/HTML5/api/dispatcher.php";
                //url = "url error";
                $.post(url, {service: 'welcome.hello', params: {name: param}}, function(data){
                                                                                $("#respuesta").html(data);});
                //Llamar al punto 8)
                window.alert($("#respuesta").html());
                subrayarNombre ();
});
//Punto 8)
function subrayarNombre (){
    var name = $("#alias").val();
    window.alert(name);
    $("#respuesta").val().replace( name , '<span style="text-decoration: underline">' +name + '</span>');
}
//Punto 7)
/*
 * Extraido de: http://api.jquery.com/ajaxError/
 * 
 * cambiar la url para que esta función se active
 * 
 */ 
$("#respuesta").ajaxError(function(event, request, settings){
  $(this).html("<li>Error leyendo de " + settings.url + "</li>");
  var properties = {
         "background-color": "#ddd",
         "font-weight": "bold",
         "color" : "red"
       }
   $(this).css(properties);
});