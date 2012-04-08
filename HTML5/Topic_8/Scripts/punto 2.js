/* 
 * Persist your test code (Punto 2)
 */
$("#saveCode").click(function () {
    window.localStorage.setItem('value', $("#userCode").val);
    window.localStorage.setItem('timestamp', (new Date()).getTime());                
});



