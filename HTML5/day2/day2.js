/* 
 * Day 2
 */
    $(document).ready(function() {
        $.mobile.showPageLoadingMsg();
    });
    $(document).keypress(function(e) {
    if (e.keyCode == 27) {
        $.mobile.hidePageLoadingMsg();
    }
    });



