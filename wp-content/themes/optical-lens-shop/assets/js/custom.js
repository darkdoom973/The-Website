function optical_lens_shop_menu_open_nav() {
	window.optical_lens_shop_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function optical_lens_shop_menu_close_nav() {
	window.optical_lens_shop_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'
 	});
	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

jQuery(document).ready(function () {
	window.optical_lens_shop_currentfocus=null;
  	optical_lens_shop_checkfocusdElement();
	var optical_lens_shop_body = document.querySelector('body');
	optical_lens_shop_body.addEventListener('keyup', optical_lens_shop_check_tab_press);
	var optical_lens_shop_gotoHome = false;
	var optical_lens_shop_gotoClose = false;
	window.optical_lens_shop_responsiveMenu=false;
 	function optical_lens_shop_checkfocusdElement(){
	 	if(window.optical_lens_shop_currentfocus=document.activeElement.className){
		 	window.optical_lens_shop_currentfocus=document.activeElement.className;
	 	}
 	}
 	function optical_lens_shop_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.optical_lens_shop_responsiveMenu){
			if (!e.shiftKey) {
				if(optical_lens_shop_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				optical_lens_shop_gotoHome = true;
			} else {
				optical_lens_shop_gotoHome = false;
			}

		}else{

			if(window.optical_lens_shop_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.optical_lens_shop_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.optical_lens_shop_responsiveMenu){
				if(optical_lens_shop_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					optical_lens_shop_gotoClose = true;
				} else {
					optical_lens_shop_gotoClose = false;
				}
			
			}else{

			if(window.optical_lens_shop_responsiveMenu){
			}}}}
		}
	 	optical_lens_shop_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

