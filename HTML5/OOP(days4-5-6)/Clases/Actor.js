/* 
 * Actor Class
 */

//-------Puntos 12-13

function Actor (){
    var name;
    var biography;

    Actor.prototype.getName = function(){
        return this.name;
    }
    Actor.prototype.setName = function(_name){
        this.name = _name;
    }
    Actor.prototype.getBiography = function(){
        return this.biography;
    }
    Actor.prototype.setBiography = function(_biophy){
        this.biography = _biophy;
    }    
}

