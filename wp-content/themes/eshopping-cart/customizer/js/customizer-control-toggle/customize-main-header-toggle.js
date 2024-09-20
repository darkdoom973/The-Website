/****************/
// Main header	
/****************/
( function( $ ) {
//**********************************/
// Main Header settings
//**********************************/
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['eshopping_cart_main_header_option'] = [
		    {
				controls: [    
				'eshopping_cart_main_hdr_btn_txt', 
				'eshopping_cart_main_hdr_btn_lnk',
				'eshopping_cart_main_hdr_calto_txt',
				'eshopping_cart_main_hdr_calto_nub',
				'eshopping_cart_main_hdr_calto_email',
				'eshopping_cart_main_header_widget_redirect'
				],
				callback: function(headeroptn){
					if (headeroptn =='none'){
					return false;
					}
					return true;
				}
			},	
			 {
				controls: [    
				'eshopping_cart_main_hdr_btn_txt', 
				'eshopping_cart_main_hdr_btn_lnk',
				],
				callback: function(layout){
					if(layout=='button'){
					return true;
					}
					return false;
				}
			},
			 {
				controls: [    
				'eshopping_cart_main_hdr_calto_txt',
				'eshopping_cart_main_hdr_calto_nub',
				'eshopping_cart_main_hdr_calto_email',
				],
				callback: function(layout){
					if(layout=='callto'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'eshopping_cart_main_header_widget_redirect'
				],
				callback: function(layout){
					if(layout=='widget'){
					return true;
					}
					return false;
				}
			},
			 
		];	
		OPNCustomizerToggles ['eshopping_cart_sticky_header'] = [
		    {
				controls: [    
				'eshopping_cart_sticky_header_effect', 
				],
				callback: function(headeroptn){
					if (headeroptn == true){
					return true;
					}
					return false;
				}
			},	
		];	
    });
})( jQuery );