<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dias 9, 10 y 11 (Backbone y MVC)</title>
    </head>
    <body>
        <div data-role="page" id="inicial">
                <header>
                    <h1>Movies List</h1>
                    <input id="movieTitle" type="text" placeholder="Titulo de nueva pelicula">
                    <input id="movieYear" type="text" placeholder="Año de esta">                    
                </header>
                <input type="button" id="clearButton" value="Clear data">                   
        </div><!-- /header -->
        <div data-role="content">                    
            <div id="movieViewer">
                <ul id="moviesList" >Elementos de la lista:                            
                </ul>
            </div>
        </div><!-- /content -->
        <div data-role="footer">                    
            <div id="end">foo(BAR)</div>
        </div><!-- footer -->
        </div>         
        <script language="javascript" src="Scripts/jquery-1.7.1.js"></script>
        <script language="javascript" src="Scripts/underscore-min.js"></script>
        <script language="javascript" src="Scripts/backbone.js"></script>
        <script language="javascript" src="Scripts/backbone-localstorage.js"></script>
        <script language="javascript" src="Scripts/backboneMovies.js"></script>
        <script type="text/template" id="movieTemplate">
                    <div id="movie">
                        <div><%= title %> <label>(<%= year %>)</label> </div>
                        <div><%= details %></div>
                    <div></div>
                    </div>
                    <div id="actualMovie">
                    <div>
                        <input id="titulo" type="text" value="<%= title %>" />
                        <label>
                        (<input id="year" type="text" value="<%= year %>" />)
                        </label>
                    </div>
                    <div><input id="details" type="text" value="<%= details %>" /></div>
                    <div></div>
                    </div>;
        </script>
    </body>
</html>
