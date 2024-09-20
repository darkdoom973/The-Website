( function( $ ){
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'eshopping-cart-toggle-control', function( argument, api ){
		OPNCustomizerToggles['eshopping_cart_top_slide_layout'] = [
		    {
				controls: [    
				'eshopping_cart_top_slider_2_title',
				'eshopping_cart_lay2_adimg',
				'eshopping_cart_lay2_url',
				'eshopping_cart_lay2_adimg2',
				'eshopping_cart_lay2_url2',
				'eshopping_cart_top_slider_2_title2',
				'eshopping_cart_lay2_adimg3',
				'eshopping_cart_lay2_url3',
				'eshopping_cart_lay3_adimg',
				'eshopping_cart_lay3_url',
				'eshopping_cart_lay3_adimg3',
				'eshopping_cart_lay3_3url',
				'eshopping_cart_lay3_adimg2',
				'eshopping_cart_lay3_2url',
				'eshopping_cart_include_category_slider',
				'eshopping_cart_lay3_bg_img',
				'eshopping_cart_lay3_bg_img_ovrly',
				'eshopping_cart_lay3_heading_txt',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-1'){
					return false;
					}
					return true;
				}
			},	
			{
				controls: [    
				'eshopping_cart_top_slide_content',
				'eshopping_cart_top_slider_2_title',
				'eshopping_cart_lay2_adimg',
				'eshopping_cart_lay2_url',
				'eshopping_cart_lay2_adimg2',
				'eshopping_cart_lay2_url2',
				'eshopping_cart_top_slider_2_title2',
				'eshopping_cart_lay2_adimg3',
				'eshopping_cart_lay2_url3',
				'eshopping_cart_lay3_bg_img_ovrly',
				'eshopping_cart_lay3_bg_img',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-2'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [  
				'eshopping_cart_top_slide_content',  
				'eshopping_cart_lay3_adimg',
				'eshopping_cart_lay3_url',
				'eshopping_cart_lay3_adimg2',
				'eshopping_cart_lay3_2url',
				'eshopping_cart_lay3_adimg3',
				'eshopping_cart_lay3_3url',
				'eshopping_cart_include_category_slider',
				'eshopping_cart_lay3_bg_img_ovrly',
				'eshopping_cart_lay3_bg_img',
				'eshopping_cart_lay3_heading_txt',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-3'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [  
				
				'eshopping_cart_lay3_bg_img_ovrly',
				'eshopping_cart_lay3_bg_img',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-4' || slideroptn =='slide-layout-3'|| slideroptn =='slide-layout-2'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [    
				'eshopping_cart_top_slide_content',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-4' || slideroptn =='slide-layout-1' || slideroptn =='slide-layout-2' || slideroptn =='slide-layout-3'){
					return true;
					}
					return false;
				}
			},
			
			
			 
		];	
            OPNCustomizerToggles['eshopping_cart_top_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles['eshopping_cart_cat_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_cat_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles['eshopping_cart_product_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_product_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			];	
			OPNCustomizerToggles['eshopping_cart_category_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_category_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];

			OPNCustomizerToggles['eshopping_cart_product_list_slide_optn'] = [
		    {
				controls: [    
				'eshopping_cart_product_list_slide_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];
			OPNCustomizerToggles['eshopping_cart_feature_product_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_feature_product_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];
			OPNCustomizerToggles['eshopping_cart_cat_tb_lst_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_cat_tb_lst_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
			];
			OPNCustomizerToggles['eshopping_cart_brand_slider_optn'] = [
		    {
				controls: [    
				'eshopping_cart_brand_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			}
			
		];


    });
})( jQuery );