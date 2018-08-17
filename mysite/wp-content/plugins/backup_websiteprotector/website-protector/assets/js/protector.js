jQuery(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {      
        return false;
    }
});
jQuery(document).ready(function () {
    //Disable cut copy paste
    jQuery('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    jQuery("body").on("contextmenu",function(e){
        return false;
    });
});

//ctrl u
document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 67 ||  e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
            //alert('not allowed');
            return false;
        } else {
            return true;
        }
};
//ctrl u closed