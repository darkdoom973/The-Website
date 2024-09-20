/*************************************/
// Blog Archive Hide and Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
OPNCustomizerToggles ['eshopping_cart_blog_post_content'] = [
		    {
				controls: [    
				'eshopping_cart_blog_expt_length',
				'eshopping_cart_blog_read_more_txt',
				],
				callback: function(layout){
					if(layout=='full'|| layout=='nocontent'){
					return false;
					}
					return true;
				}
			},	
		];	
	});
})( jQuery );