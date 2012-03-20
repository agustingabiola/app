/* 
 * Una clase que ofrece cierta funcionalidad para ser heredada por una subclase, pero no está ideada para ser autónoma
 */
//------Punto 10
var SocialMixin = function(){
    
};
SocialMixin.prototype = {
    share: function(friendName){
        console.log('Sharing '+this.getTitle() +' with '+ friendName);
    },
    like: function(){
        console.log('Movie has one more like!!');
    }
};


//-----Punto 11
Movie.prototype.like = SocialMixin.prototype.like;
Movie.prototype.share = SocialMixin.prototype.share;

