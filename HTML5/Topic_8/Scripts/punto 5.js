/* 
 * Worker
 */
var counter=1;
setInterval(newMessage,3000); //cambiar por 60000
    
function newMessage (){
    var msg="Worker doing job#"+counter;
    self.postMessage(msg);
    ++counter;
}
