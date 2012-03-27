<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=yes"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
</head> 
<body> 
    <div data-role="page" id="main_page">
        <div data-role="header">
            <h1>Main Page</h1>
        </div><!-- /header -->
        <div data-role="content">	
            <p>Hello world</p>		
        </div><!-- /content -->
        <br></b>
        <a href="http://localhost/app/HTML5/day1/index.php" data-role="button" id ="botonDiaUno" data-icon="star" data-mini="true" data-inline='true'>Ir al dia Uno</a>
        <br></b><br></b>
        <input type="text" id="textinput"  value="Might wanna go to page three to find out more about exercise 10" autofocus>
        <br></b><br></b>
        <div data-role="controlgroup" data-type="horizontal">
                        <a href="#main_page" data-role="button" data-transition="fade" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 1</a>
                        <a href="#page2" data-role="button" data-transition="slidedown" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 2</a>
                        <a href="#page3" data-role="button" data-transition="pop" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 3</a>
        </div>
        <div data-role="footer">
            <h4>I'm the footer</h4>
        </div>    
        </div>
    </div><!-- /page 2-->
    <div data-role="page" id="page2">
        <div data-role="header">
            <h1>Page 2</h1>
        </div><!-- /header page 2-->
        <div data-role="content">	
            <p>Hello world to seccond page ;)</p>
            <p>Might wanna go to page three to find out more about exercise 10</p>
        </div><!-- /content page 2-->
        <br></b>
        <a href="https://www.google.com.ar" data-role="button" id ="botonGoogle" data-icon="star" data-mini="true" data-inline='true'>Ir a Google</a>
        <br></b><br></b>
        <input type="text" id="textinput" autofocus >
        <br></b><br></b>
        <div data-role="controlgroup" data-type="horizontal">
                        <a href="#main_page" data-role="button" data-transition="fade" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 1</a>
                        <a href="#page2" data-role="button" data-transition="slidedown" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 2</a>
                        <a href="#page3" data-role="button" data-transition="pop" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 3</a>
        </div>
        <div data-role="footer">
            <h4>I'm the footer of page two</h4>
        </div>
    </div>
    </div><!-- /page 3-->
    <div data-role="page" id="page3">
        <div data-role="header">
            <h1>Page 3</h1>
        </div><!-- /header page 3-->
        <div data-role="content">	
            <p>Hello world to third page ;)</p>		
        </div><!-- /content page 3-->
        <br></b>
        <div data-role="content">
            <p>Contenido basura contenido basura</p>
            <p>You can go back to main page, <a href="#main_page">here</a>
        </div>
        <a href="https://www.facebook.com/" data-role="button" id ="botonGoogle" data-icon="star" data-mini="true" data-inline='true'>Ir a Facebook</a>
        <br></b><br></b>
        <input type="text" id="textinput" autofocus >
        <br></b><br></b>
        <div data-role="controlgroup" data-type="horizontal">
                        <a href="#main_page" data-role="button" data-transition="fade" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 1</a>
                        <a href="#page2" data-role="button" data-transition="slidedown" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 2</a>
                        <a href="#page3" data-role="button" data-transition="pop" data-icon="arrow-r" data-mini="true" data-inline='true'>Page 3</a>
                        <a href="#exercise_10" data-role="button" data-transition="flip" data-icon="star" data-mini="true" data-inline='true'>Ejercicio 10</a>
        </div>
        <div data-role="footer">
            <h4>I'm the footer of page three</h4>
        </div>
    </div>    
    <!-- Ejercicio 9//10-->
    <!-- Ejercicio 9//10-->
    <!-- Ejercicio 9//10-->>
    <div data-role="page" id="exercise_10">
        <div data-role="header">
            <h1>Exercise 10</h1>
        </div>
        <div data-role="content">	
            <p>Hello world to exercise 10)</p>		
        </div>
        <br></b>
        <div data-role="content">
        </div>
        <a href="#alert" data-role="button" id ="botonDialog" data-icon="star" data-mini="true" data-inline='true' data-transition="pop">Open alert dialog!!</a>
        <br></b><br></b>
        <br></b><br></b>
        <a href="pages/sample1.php" data-ajax="false">Go to Sample1</a>  
        <div data-role="footer">
            <h4>I'm the end</h4>
        </div>
    </div>
    <div data-role="page" id="alert">
        <div data-role="header">
            <p>Dialog Alert</p>
        </div>
        <div data-role="content">
            <p>This is a DIALOG</p>
        </div>
    </div>      
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
    <script src="day2.js" type="text/javascript"></script>  
</body>
</html>
