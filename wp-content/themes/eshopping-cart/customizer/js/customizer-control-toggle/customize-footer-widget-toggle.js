/*****************************************************************************/
/**********************customizer control setting*************************/
/*****************************************************************************/
( function( $ ) {
//**********************************/
// Footer widget hide and show settings
//**********************************/
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['eshopping_cart_bottom_footer_widget_layout'] = [
			{
				controls: [
					
					
					'eshopping_cart_bottom_footer_widget_redirect',
				],
				callback: function(layout){
					if ('ft-wgt-none'== layout){
						return false;
					}
					return true;
				}
			},
				
		];	
 });
})( jQuery );