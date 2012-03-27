<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Template Engines</title>
    </head>
    <body>
        
        <div id="template_mustache" style="background-color: gray;">
            <h1>Template Mustache</h1>
        </div>
        <div id="template_under" style="color:#FF0000;">
            <h1>Template UnderScore</h1>
        </div>
        <div id="template_j" style="color:#005555; background-color: graytext;">
            <h1>Template JSmart</h1>
        </div>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script language="javascript" src="Source Scripts/smart-2.7.min.js"></script>
        <script language="javascript" src="Source Scripts/mustache.js"></script>
        <script language="javascript" src="Source Scripts/underscore-min.js"></script>
        <script language="javascript" src="Profiles/Profile.json"></script>
        <script language="javascript" src="Templates/Mustache.js"></script>
        <script language="javascript" src="Templates/UnderScore.js"></script>
        <script language="javascript" src="Templates/JSmart.js"></script>
        <script>
            $(document).ready (function (){               
               $("#template_mustache").html (Mustache.render (templateMustache, json_view));
               $("#template_under").html (_.template (templateUnderScore, json_view));
               $("#template_j").html (new jSmart (templateJS).fetch(json_view));
            });
        </script>
    </body>
</html>
