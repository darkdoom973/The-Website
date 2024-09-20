/*************************************/
// Ribbon Hide N Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
OPNCustomizerToggles ['eshopping_cart_ribbon_background'] = [
		     {
				controls:[    
				'eshopping_cart_ribbon_bg_background_image',
				
				],
				callback: function(layout){
					if(layout=='image'){
					return true;
					}else{
					return false;	
					}
				}
			},	
			{
				controls: [  
				'eshopping_cart_ribbon_video_poster_image',
				'eshopping_cart_ribbon_bg_video', 
			    
				],
				callback: function(layout1){
					if(layout1 =='video'){
					return true;
					}else{
					return false;	
					}
				}
			},	
		];	
	});
})( jQuery );