/* 
 * DownloadableMovie Class inherits from Movie Class
 */
//---------Punto 8)//9)

function DownloadableMovie (){
    Singleton = function Singleton$constructor() {
    return { 
        getInstance : function Singleton$getInstance() {
            return this;
        }
    };
    }();
}

DownloadableMovie.prototype = new Movie ('movie para download', '132456','123456');

DownloadableMovie.prototype.download = function (){
    console.log ('Downloading: '+ this.getTitle ());
}
