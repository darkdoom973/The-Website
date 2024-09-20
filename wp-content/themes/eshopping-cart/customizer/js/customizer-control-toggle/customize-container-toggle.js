/*********************************/
// Sidebar hide and show control
/*********************************/
( function( $ ){
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
OPNCustomizerToggles ['eshopping_cart_default_container'] = [
		    {
				controls: [    
				'eshopping_cart_conatiner_maxwidth',
				'eshopping_cart_conatiner_top_btm',
				],
				callback: function(layout){
					if(layout=='fullwidth'){
					return false;
					}
					return true;
				}
			},
			{
				controls: [    
				'eshopping_cart_conatiner_width',  
				],
				callback: function(layout){
					if(layout =='boxed'){
					return false;
					}
					return true;
				}
			},		
		];
	});
})( jQuery );