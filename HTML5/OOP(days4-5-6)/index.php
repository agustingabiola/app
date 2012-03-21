<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <title>Tema 3 (POO en JE)</title>
    </head>
    <body>
        <script src="Clases/MovieModule.js" type="text/javascript"></script>        
        <script src="Clases/MovieObserver.js" type="text/javascript"></script>
        <script src="Clases/Movie.js" type="text/javascript"></script>
        <script src="Clases/DownloadableMovie.js" type="text/javascript"></script>
        <script src="Clases/SocialMixin.js" type="text/javascript"></script>
        <script src="Clases/Actor.js" type="text/javascript"></script>
        <div data-role="page" id="observer" >
        </div>
        <script>
            var aux_movie_1 = new Movie ('Limitless', '8.5', '01234');
            var aux_movie_2 = new Movie ('The Descendants', '7.5', '01235');
            var aux_movie_3 = new Movie ('Midnight in Paris', '9', '01236');
            
            MovieModule.getTitle();
            aux_movie_1.getTitle ();
            var titulo_2 = aux_movie_2.getTitle ();
            alert ("Se instancio la variable aux con: " + titulo_2);
            aux_movie_3.play();
            aux_movie_3.stop();
            
            var aux_movie_4 = new DownloadableMovie ();
            aux_movie_4.download();
            
            var aux_movie_4 = new DownloadableMovie ();  //Supuestamente no me deberia dejar hacer esto
            aux_movie_4.download();
            
            aux_movie_1.share ('Agustin');
            
            var actor1 = new Actor ();
            actor1.setName('Sean Penn');
            actor1.setBiography('Ganador de dos Oscar');
            var actor2 = new Actor ();
            actor2.setName('Jack Nicholson');
            actor2.setBiography('El más ganador de premios Oscar');
            var actor3 = new Actor ();
            actor3.setName('Keith Sunderland');
            actor3.setBiography('Ganador de ningun Oscar');
            
            aux_movie_1.setCast([actor1, actor2, actor3]);
            console.log(aux_movie_1.getCast()[1]);
        </script>
    </body>
</html>
