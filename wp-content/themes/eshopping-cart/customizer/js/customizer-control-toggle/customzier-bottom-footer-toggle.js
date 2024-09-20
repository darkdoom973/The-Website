/*************************************/
// Bottom Footer Hide and Show control
/*************************************/
( function( $ ){
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
OPNCustomizerToggles ['eshopping_cart_bottom_footer_layout'] = [
		    {
				controls: [ 
				'eshopping_cart_bottom_footer_col1_set',
				'eshopping_cart_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					if(layout=='ft-btm-none' ){
					return false;
					}
					return true;
				}
				
		},


		{
				controls: [ 
				'eshopping_cart_bottom_footer_col1_set',
				'eshopping_cart_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					if(layout=='ft-btm-none' || layout=='ft-btm-two' || layout=='ft-btm-three' ){
					return false;
					}
					return true;
				}
				
		},


		{
				controls: [ 
				'eshopping_cart_bottom_footer_col1_set',
				'eshopping_cart_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					if(layout=='ft-btm-one' ){
					return true;
					}
					return false;
				}
				
		},
		
		
		
		// col1
			{
				controls: [    
				'eshopping_cart_bottom_footer_col1_set',
				'eshopping_cart_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					var val = api( 'eshopping_cart_bottom_footer_col1_set' ).get();
					if((layout!== 'ft-btm-none') && val=='text'){
					return true;
					}
					return false;
				}
			},
				
									
					
];


OPNCustomizerToggles ['eshopping_cart_bottom_footer_col1_set'] = [
			{
				controls: [    
				'eshopping_cart_footer_bottom_col1_texthtml',
				],
				callback: function(layout){
					var val = api( 'eshopping_cart_bottom_footer_layout' ).get();
					if((layout == 'text') && (val!=='ft-btm-none')){
					return true;
					}
					return false;
				}
			},
			
			
			
			
		];


	});
})( jQuery );