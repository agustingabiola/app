/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//-------Puntos 3-6

function MovieObserver (){
    this.handleSubscription = function(e, _state, _movie){
        if (_state == "playing"){
            console.log ('The movie ' + _movie.getTitle() + ' is now being played :)');
        }
        else if (_state == "stopped"){
                console.log ('The movie with id: ' + _movie.getId() +' has now been stoppped!!');
            }
    }
    $.subscribe("movie_subscription", this.handleSubscription);
}

/* jQuery Tiny Pub/Sub - v0.7 - 10/27/2011
* http://benalman.com/
* Copyright (c) 2011 "Cowboy" Ben Alman; Licensed MIT, GPL */

(function($) {

  var o = $({});

  $.subscribe = function() {
    o.on.apply(o, arguments);
  };

  $.unsubscribe = function() {
    o.off.apply(o, arguments);
  };

  $.publish = function() {
    o.trigger.apply(o, arguments);
  };

}(jQuery));
