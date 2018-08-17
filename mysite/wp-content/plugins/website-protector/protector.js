jQuery(document).ready(function(){

	
	jQuery(document).keydown(function (event) {
		if(front_f12){
	        if (event.keyCode == 123) {
	            return false;
	        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
	            return false;
	        }
	    }

	    if(front_ctrl_u){
		
	        if (event.ctrlKey && (event.keyCode === 67 || event.keyCode === 86 || event.keyCode === 85 || event.keyCode === 117)) {
	            //alert('not allowed');
	            return false;
	        } else {
	            return true;
	        }
		}
    });


	if(right_click){
		jQuery("body").on("contextmenu", function (e) {
            return false;
        });
	}

	if(text_copy){
		jQuery('body').bind(' copy ', function (e) {
        	e.preventDefault();
    	});
	}

	if(text_paste){
		jQuery('body').bind(' paste ', function (e) {
            e.preventDefault();
        });
	}

	if(text_cut){
		jQuery('body').bind(' cut ', function (e) {
            e.preventDefault();
        });
	}

	if(text_select){
		jQuery("body").css("-webkit-user-select","none");
	    jQuery("body").css("-moz-user-select","none");
	    jQuery("body").css("-ms-user-select","none");
	    jQuery("body").css("-o-user-select","none");
	    jQuery("body").css("user-select","none");
	}

	if(text_undo){
		jQuery("body").keydown(function(event){
          var zKey = 90;
          if ((event.ctrlKey || event.metaKey) && event.keyCode == zKey) {
            event.preventDefault();
            return false;
          }
        });
	}
});