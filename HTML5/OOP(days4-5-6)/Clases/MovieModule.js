//-------Punto 7)

var MovieModule = {
    title: 'somevalue',
    rating: 'p_rating',
    id: 'p_id',
    
    getTitle : function (){
                        console.log (this.title);
                        return this.title;
                    },
    setTitle:  function (p_title){this.title = p_title;},
    
    getRating: function (){
                        console.log (this.rating);
                        return this.rating;
                    },
    setRating: function (p_rating){this.rating = p_rating;},
    
    getId: function (){
                        console.log (this.id);
                        return this.id;
                    },
    setId: function (p_id){this.id = p_id},
    
    play: function (){
        //console.log ('The movie ' +title+ ' is now being played :)');
        $.publish('movie_subscription',['playing', this]);
    },    
    stop: function (){
        //console.log ('The movie with id: ' + id +' has now been stoppped!!');
        $.publish('movie_subscription',['stopped', this]);
    }
};