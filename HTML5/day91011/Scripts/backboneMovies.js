/* 
 * Day day 9 10 11 
 */
//Si comenzamos de esta manera se carga cuando el documento esta listo
$(function (){
    //Movie model with backbone
    var Movie = Backbone.Model.extend({

        defaults: {
            title: "Summer of 69",
            year: "1969",
            details: "No Data."        
        },
        remove: function() {
            this.destroy();
        }    
    });
    //-------Fin model
    //---Ahora creamos una coleccion del modelo
    var movieList = Backbone.Collection.extend({
        model: Movie,
        localStorage: new Store("movies-backbone")
    });
    //----Creamos una vista de MovieList
    //------------------------------------
    var movieListView = Backbone.View.extend({
                tagName: "li", //de tipo lista
                template: _.template($('#movieTemplate').html()),

                events: {
                    "keypress .edits" : "updateOnEnter",
                    "click #clearButton" : "clear"
                },

                initialize: function() {
                    this.model.bind('change', this.render, this);
                },

                render: function() {
                    this.$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                close: function() {
                    this.$('#movie').show("slow");
                    this.$('#actualMovie').hide("slow");
                },
                updateOnEnter: function(e) {
                    if (e.keyCode == 13) this.close();
                },
                clear: function() {
                    alert ("llega hasta aca? no");
                    this.$('#movie').hide("slow");
                    this.model.clear();
                }
            });
        //------------Ahora pasamos todo a una vista de nuestra "pagina" antes tenemos que crear una lista global
        var shownMovieList = new movieList ();
        
        var pageView = Backbone.View.extend({

            el: $("#inicial"),

            events: {
                "keypress #movieYear": "crear"
            },

            initialize: function() {

                this.input = this.$("#movieTitle");
                this.inputY = this.$("#movieYear");

                shownMovieList.bind('add', this.addOne, this);
                shownMovieList.bind('reset', this.addAll, this);

                shownMovieList.fetch();
            },
            addOne: function(Movie) {
                var view = new movieListView({model: Movie});
                this.$("#moviesList").append(view.render().el);
            },

            addAll: function() {
                shownMovieList.each(this.addOne);
            },

            crear: function(e) {
                if (e.keyCode != 13) return;
                shownMovieList.create({title: this.input.val(), year: this.inputY.val()});
                this.input.val('');
                this.inputY.val('');
            }
        });

        var run = new pageView;
}
);

