/* 
 * Movie Class
 */
//------Puntos 1-6

function Movie (p_title, p_rating, p_id){
    var title = p_title;
    var rating = p_rating;
    var id = p_id;
    var movie_cast = new Array();
    
    this.getTitle = function (){
                        console.log (title);
                        return title;
                    }
    this.setTitle = function (p_title){title = p_title;}
    
    this.getRating = function (){
                        console.log (rating);
                        return rating;
                    }
    this.setRating = function (p_rating){rating = p_rating;}
    
    this.getId = function (){
                        console.log (id);
                        return id;
                    }
    this.setId = function (p_id){id = p_id}
    
    this.play = function (){
        //console.log ('The movie ' +title+ ' is now being played :)');
        $.publish('movie_subscription',['playing', this]);
    }
    
    this.stop = function (){
        //console.log ('The movie with id: ' + id +' has now been stoppped!!');
        $.publish('movie_subscription',['stopped', this]);
    }
    
    //--------Puntos 14-15
    this.setCast = function(array_cast){
        this.movie_cast = array_cast;
    }
    
    this.getCast = function (){
        var solo_nombres = [];        
        for (var i= 0, aux = this.movie_cast.length; i<aux; ++i){
            solo_nombres[i] = this.movie_cast[i].getName();
        }
        return solo_nombres;
    }
}


