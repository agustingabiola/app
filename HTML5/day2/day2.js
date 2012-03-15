/* 
 * Day 2
 */
    $(document).ready(function() {
        $.mobile.showPageLoadingMsg();
    });
    $.keypress(function(e){
        alert ('apretaste una tecla');
        if(e.keyCode == KEYCODE_ESC){
            alert ('apretaste escape');
            $.mobile.hidePageLoadingMsg();
        }
    });



