<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-1.7.1.js"></script>
        
        <script> //Ejercicio 2)3)4)5)
            $(document).ready(Loaded);
           //window.onload=Loaded;
           function Loaded (){
               window.alert("The page is loaded.");
               document.getElementById('alias').focus();               
           }
           //$("#botonRespuesta").click(function() {
               function magic(){ 
                var param = $("#alias").val();
                url = "http://localhost/app/HTML5/api/dispatcher.php";
                window.alert("la puta madree");

                $.post(url, {service: 'welcome.hello', params: {name: param}}, function(data){
                                                                                $("#respuesta").html(data);});
                };
        </script>
        <title>BootCamp HTML5</title>
    </head>
    <body>
        <h1>It Works!</h1>
        <h2> <input type="button" id ="botonRespuesta" onclick="magic()" value="Magic button"/></h2> 
        <h3> <textarea id="alias"></textarea> 
             <div id="respuesta" style="position:absolute; left: 200px; bottom: 200px;"> Aqui va la respuesta del dispatcher</div>             
        </h3>
    </body>
</html>
