<!DOCTYPE html>
<html manifest="cache.manifest">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="JS Source/jquery-1.7.1.min.js" language="javascript"></script>
        <!-- api para google maps -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <title>HTML 5 API (CSS + HTML + JS)</title>
    </head>
    <body>
        <div id="content">
            <header>Code Tester</header>
            <textarea rows="10" id="userCode" placeholder="Write a simple javascript code..."></textarea>
            <button id="testCode" title="Run the code">Test!</button>
            <button id="saveCode" title="Save the code">Save?</button>
        </div>
        <script src="Scripts/punto 1.js" language="javascript"></script>
        <script>
            var text = window.localStorage.getItem('value');
            if(text) {
                $("#userCode").val (text);
            } 
        </script>
        <script src="Scripts/punto 2.js" language="javascript"></script>
        
        <!-- Punto 3 DND-->
        <div id="dragNdrop">
            <div id="drop">
                <h1>Drop your files here</h1>
            </div>
            <output id="objectsDropped"></output>
        </div> 
        <script src="Scripts/punto 3.js" language="javascript"></script>
        
        <!-- Punto 4-->
        <div id="Gmap" style="width:100%; height:100%">
            <button id="geoLocation" title="Click to know your position">Hide and seek</button>
        </div>
        <style>
            html { height: 100% }
            body { height: 100%; margin: 0px; padding: 0px }
            #Gmap { height: 100%; }
        </style>
        <script src="Scripts/punto 4.js" language="javascript"></script>
        
        <!-- Worker-->
        <script>
            var worker = new Worker("Scripts/punto 5.js");
            worker.onmessage = function (event) {
                                console.log(event.data);};
        </script>
        
        <!-- WeB SOCKET-->
        <div id="wsDiv">
           <h2>WebSocket Test</h2>
           <div id="output"></div>
        </div>
        <script src="Scripts/punto 6.js" language="javascript"></script>         
    </body>
</html>
