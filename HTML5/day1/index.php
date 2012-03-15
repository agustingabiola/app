<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-1.7.1.js"></script>
        <title>BootCamp HTML5</title>
    </head>
    <body>
        <h1>Dia Uno</h1>        
        <div id="botones">
        <form>
            <input type="button" id ="botonRespuesta" value="Obtener Respuesta"/> 
            </br></br>
            <textarea id="alias">Escribe tu nombre...</textarea> 
            </br></br>
            </br></br>
            <input type="button" value="Get Movies" class="btday1" onclick="respuestaMovies()">
        </br></br>
        </form>
        </div>        
        <div id="respuesta"> Aqui va la respuesta del dispatcher.php</div>
        <script src="day1.js" type="text/javascript"></script>
    </body>
</html>
