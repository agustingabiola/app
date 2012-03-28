//-------Puntos 3-6
function MovieObserver (){
    this.handlePlay = function(e, _movie) {
      console.log ('The movie ' + _movie + ' is now being played :)');
    };
    this.handleStop = function(e, _movie){
      console.log ('The movie ' + _movie + ' has now been stopped!! :)');
    };
};
