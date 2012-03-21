<?php 
    $title = "HTML5 Practice";
    $subtitle = "Day 4";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$title: $subtitle"; ?></title>
        <script src="Source/require.js"></script>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script>
            require.config({
                waitSeconds: 10 //no anda??
            });
            require(["Modules/Director", "Modules/Movie"], function(Director, Movie) {
                var movie = new Movie ("Alicia en el País de las....","8", "123456");
                var RidleyScott = new Director("Ridley Scott", ["Cast is everything.", "Do what you haven't...", "Do more", "Dont expect much", "Live and let Die", "Die and let Live"]); //sets name in constructor
                movie.setDirector(RidleyScott);
                movie.getDirector().speak ();
            });
        </script>
    </head>
    <body>
        <div data-role="page" id="mainpage">
            <header>
                <h1><?php echo "<span class='title'>$title</span>: <span class='subtitle'>$subtitle</span>"; ?></h1>
            </header>

            <!-- add your content here -->
            <h3>-- Enjoy! --</h3>

            <footer>
                <div><?php echo $title; ?> v1.0</div>
                <div>@author Alberto Miranda <a href="mailto:alberto@nextive.com">&lt;alberto@nextive.com&gt;</a></div>
                <div>@author Esteban Abait <a href="mailto:esteban.abait@nextive.com">&lt;esteban.abait@nextive.com&gt;</a></div>
            </footer>
        </div>
        </div>
        <div data-role="page" id="dialog">
            <div data-role="header">
                <p>Dialog Quote</p>
            </div>
            <div data-role="content">
                <p>This is a DIALOG</p>
            </div>
        </div>
        </div>
    </body>
</html>
