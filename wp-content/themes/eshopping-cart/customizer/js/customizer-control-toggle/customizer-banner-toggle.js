/*************************************/
// Banner Hide N Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
OPNCustomizerToggles ['eshopping_cart_banner_layout'] = [
		     

		     {
				controls: [    
				'eshopping_cart_bnr_1_img',
				'eshopping_cart_bnr_1_url',
				'eshopping_cart_bnr_2_img',
				'eshopping_cart_bnr_2_url',
				'eshopping_cart_bnr_3_img',
				'eshopping_cart_bnr_3_url',
				'eshopping_cart_bnr_4_img',
				'eshopping_cart_bnr_4_url',
				'eshopping_cart_bnr_5_img',
				'eshopping_cart_bnr_5_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-four'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'eshopping_cart_bnr_1_img',
				'eshopping_cart_bnr_1_url',
				'eshopping_cart_bnr_2_img',
				'eshopping_cart_bnr_2_url',
				'eshopping_cart_bnr_3_img',
				'eshopping_cart_bnr_3_url',
				'eshopping_cart_bnr_4_img',
				'eshopping_cart_bnr_4_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-five' ||  layout=='bnr-four'){
					return true;
					}else{
					return false;	
					}
				}
			},	
		    {
				controls: [    
				'eshopping_cart_bnr_1_img',
				'eshopping_cart_bnr_1_url',
				'eshopping_cart_bnr_2_img',
				'eshopping_cart_bnr_2_url',
				'eshopping_cart_bnr_3_img',
				'eshopping_cart_bnr_3_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'eshopping_cart_bnr_1_img',
				'eshopping_cart_bnr_1_url',
				'eshopping_cart_bnr_2_img',
				'eshopping_cart_bnr_2_url',
				
				],
				callback: function(layout){
					if(layout=='bnr-two'|| layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five' || layout=='bnr-six'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [    
				'eshopping_cart_bnr_1_img',
				'eshopping_cart_bnr_1_url',	
				],
				callback: function(layout){
					if(layout=='bnr-one' || layout=='bnr-two'|| layout=='bnr-three' || layout=='bnr-four' || layout=='bnr-five' || layout=='bnr-six'){
					return true;
					}else{
					return false;	
					}
				}
			},	
				
		];	
	});
})( jQuery );