/* 
 * Director Module
 */
define(["./Movie"], function(Movie) {
    function Director (p_name, p_quote){
        this.name = p_name;
        this.quotes = p_quote;
        return (this);
    }
    Director.prototype.getName = function (){return this.name;}
    Director.prototype.getQuotes = function (){return this.quotes;}
    Director.prototype.getRandomQuote = function (){
         var aux = this.getQuotes();
         var resultado = this.getName()+" says: "+aux[Math.round(Math.random()*aux.length)];
         return resultado;
        }
    Director.prototype.speak = function (){
            console.log (this.getRandomQuote());
            $("#dialog").textContent = this.getRandomQuote();  //no se como cambiarle el texto evidentemente ni como dividir paginas
            window.location = "#dialog";
        } 
    return (Director);
    }   
);

