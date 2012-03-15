<!DOCTYPE html> 
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=0.3, maximum-scale=1.0, user-scalable=yes"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>My Title</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Hello world</p>		
	</div><!-- /content -->
    <a data-role="button" id ="botonRespuesta" data-icon="star" data-mini="true">Magic previous button</a>
    <script> $("#botonRespuesta").buttonMarkup({ inline: "true" }); </script>
    <a data-role="textarea" id="alias"></a> 

</div><!-- /page -->
</body>
</html>
