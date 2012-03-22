/* 
 * Movie Module
 */
define([], function() {
    function Movie (p_title, p_rating, p_id){
        var title = p_title;
        var rating = p_rating;
        var id = p_id;
        var director;

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
        
        this.setDirector = function (_director){director = _director;}
        this.getDirector = function (){return director;}        
    }
    return (Movie);
}
);

