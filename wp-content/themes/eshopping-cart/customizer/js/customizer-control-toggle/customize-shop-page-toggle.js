( function( $ ) {
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
         OPNCustomizerToggles ['eshopping_cart_pagination'] = [
		    {
				controls: [    
				'eshopping_cart_pagination_loadmore_btn_text',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == 'click'){
					return true;
					}
					return false;
				}
			},
			
			];


    });
})( jQuery );