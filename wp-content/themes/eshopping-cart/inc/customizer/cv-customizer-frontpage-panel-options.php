<?php
/**
 * EShopping Cart manage the Customizer options of frontpage panel.
 *
 * @subpackage eshopping-cart
 * @since 1.0 
 */

/* top header section*/

// Toggle field for Enable/Disable top header
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_top_header_section',
		'label'    => __( 'Display Top Header', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_social_top_header_section',
		'label'    => __( 'Display Social Icons', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '1',
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// facebook url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_fb_button_link',
		'label'    => __( 'Facebook URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '#',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// twitter url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_tw_button_link',
		'label'    => __( 'Twitter URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '#',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// instagram url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_insta_button_link',
		'label'    => __( 'Instagram URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '#',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// linkedin url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_lkdn_button_link',
		'label'    => __( 'Linkedin URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '#',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// pinterest url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_pint_button_link',
		'label'    => __( 'Pinterest URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '#',
		'priority' => 35,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// youtube url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_youtube_button_link',
		'label'    => __( 'Youtube URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '#',
		'priority' => 40,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable new tab for social icon url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_new_tab_top_header_section',
		'label'    => __( 'Display Social URL in new Window', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '1',
		'priority' => 45,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Contact Number
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_contact_top_header_section',
		'label'    => __( 'Display Contact Number', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '1',
		'priority' => 50,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Contact Number
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_contact_top_header_section',
		'label'    => __( 'Contact Number', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
        'default'  => '+1-200-196-348-24',
		'priority' => 55,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Address
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_address_top_header_section',
		'label'    => __( 'Display Address', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '1',
		'priority' => 60,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Address
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_address_top_header_section',
		'label'    => __( 'Address', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
        'default'  => '272 California, USA',
		'priority' => 65,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Timing
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_timing_top_header_section',
		'label'    => __( 'Display Timing', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
		'default'  => '1',
		'priority' => 70,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Timing
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_timing_top_header_section',
		'label'    => __( 'Timing', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_top_header_section_content',
        'default'  => 'Mon - Sat: 8.00 - 18.00',
		'priority' => 75,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_top_header_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

/* end of top header section*/

/* general options */

// Text field for general options
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_readmore_general_section',
		'label'    => __( 'Read More Label', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_general_section_content',
		'default'  => 'Read More',	
		'priority' => 5,
	)
);

// excerpt length 
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'number',
		'settings' => 'eshopping_cart_excerpt_general_section',
		'label'    => __( 'Excerpt Length', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_general_section_content',
		'description' => __( '0 length will not show the excerpt.', 'eshopping-cart' ),
		'default'  => '55',	
		'priority' => 5,
	)
);

/* end of general options */

/* layout options */

// Select field for Theme Layout
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'select',
		'settings' => 'eshopping_cart_theme_layout_section',
		'label'    => __( 'Theme Layout', 'eshopping-cart' ),
		'description' => __( 'Box layout will be visible at minimum 1200px display', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_layout_section_content',
		'default'  => 'wide',	
		'priority' => 5,
		'choices'  => array(
			'wide' => __( 'Wide', 'eshopping-cart' ),
			'box'  => __( 'Box',  'eshopping-cart' ),
		),
	)
);

// Select field for sidebar position
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'select',
		'settings' => 'eshopping_cart_sidebar_layout_section',
		'label'    => __( 'Sidebar Position', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_layout_section_content',
		'default'  => 'right',	
		'priority' => 10,
		'choices'  => array(
			'right' => __( 'Right Sidebar', 'eshopping-cart'),
			'left'  => __( 'Left Sidebar',  'eshopping-cart'),
			'no'    => __( 'No Sidebar',  'eshopping-cart'),
		),
	)
);

/* end of layout options */

/* blog post options */

// Toggle field for Enable/Disable Author
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_author_blog_section',
		'label'    => __( 'Display Author', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_blog_post_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Comment Count
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_comment_blog_section',
		'label'    => __( 'Display Comments Count', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_blog_post_section_content',
		'default'  => '1',
		'priority' => 10,
	)
);

// Toggle field for Enable/Disable Visit Count
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_vcount_blog_section',
		'label'    => __( 'Display Visit Count', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_blog_post_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

// Toggle field for Enable/Disable Date
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_date_blog_section',
		'label'    => __( 'Display Date on Image', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_blog_post_section_content',
		'default'  => '1',
		'priority' => 20,
	)
);

// Toggle field for Enable/Disable Featured Image
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_fimage_blog_section',
		'label'    => __( 'Display Featured Image', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_blog_post_section_content',
		'default'  => '1',
		'priority' => 25,
	)
);

/* end of blog post options */

/* single post options */

// Toggle field for Enable/Disable Author
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_author_single_section',
		'label'    => __( 'Display Author', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_single_post_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Toggle field for Enable/Disable Comment Count
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_comment_single_section',
		'label'    => __( 'Display Comments Count', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_single_post_section_content',
		'default'  => '1',
		'priority' => 10,
	)
);

// Toggle field for Enable/Disable Date
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_date_single_section',
		'label'    => __( 'Display Date', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_single_post_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

// Toggle field for Enable/Disable Visit Count
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_vcount_single_section',
		'label'    => __( 'Display Visit Count', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_single_post_section_content',
		'default'  => '1',
		'priority' => 18,
	)
);

// Toggle field for Enable/Disable Visit Count
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_tags_single_section',
		'label'    => __( 'Display Tags', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_single_post_section_content',
		'default'  => '1',
		'priority' => 20,
	)
);

// Toggle field for Enable/Disable Featured Image
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_fimage_single_section',
		'label'    => __( 'Display Featured Image', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_single_post_section_content',
		'default'  => '1',
		'priority' => 25,
	)
);

/* end of single post options */

/* footer options */

// Toggle field for Enable/Disable Copyright
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_cpright_footer_section',
		'label'    => __( 'Display Copyright Footer', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '1',
		'priority' => 5,
	)
);

// Textarea field for Footer section content
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'textarea',
		'settings' => 'eshopping_cart_cpright_footer_section',
		'label'    => __( 'Team Title', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => 'Powered by WordPress',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_cpright_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_logo_footer_section',
		'label'    => __( 'Display Logo', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '1',
		'priority' => 15,
	)
);

Kirki::add_field( 'eshopping_cart_config', [
	'type'        => 'image',
	'settings'    => 'eshopping_cart_logo_footer_section',
	'label'       => __( 'Footer Logo', 'eshopping-cart' ),
	'description' => __( 'upload footer logo here', 'eshopping-cart' ),
	'section'     => 'eshopping_cart_footer_section_content',
	'default'     => '',
	'priority' => 20,
	'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_logo_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
] );

// Text field for Footer section title
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_title_footer_section',
		'label'    => __( 'Footer Title', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => 'TAKE OWNERSHIP OF YOUR BRAND',	
		'priority' => 25,
	)
);

// Text field for Footer section description
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_description_footer_section',
		'label'    => __( 'Footer Description', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => 'Finally, a partner that handles the heavy lifting for you.',	
		'priority' => 30,
	)
);

// Toggle field for Enable/Disable Social Icon
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_social_footer_section',
		'label'    => __( 'Display Social Icon', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '1',
		'priority' => 35,
	)
);

// facebook url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_fb_button_link_footer',
		'label'    => __( 'Facebook URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '#',
		'priority' => 40,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// instagram url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_insta_button_link_footer',
		'label'    => __( 'Instagram URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '#',
		'priority' => 45,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// linkedin url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_social_lkdn_button_link_footer',
		'label'    => __( 'Linkedin URL', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '#',
		'priority' => 50,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable new tab for social icon url
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_new_tab_footer_section',
		'label'    => __( 'Display Social URL in new Window', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => '1',
		'priority' => 55,
		'active_callback' => array(
			array(
				'setting'  => 'eshopping_cart_enable_social_footer_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for general options
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'text',
		'settings' => 'eshopping_cart_separator_title_footer_section',
		'label'    => __( 'Footer Separator Title', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_footer_section_content',
		'default'  => 'Start a conversation',	
		'priority' => 60,
	)
);

/* end of footer options */

/* advance options */

// Toggle field for Enable/Disable Sticky Header
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_sticky_header',
		'label'    => __( 'Enable Sticky Header', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_advance_option_content',
		'default'  => '1',
		'priority' => 5,
	)
);

Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_preloader',
		'label'    => __( 'Enable Preloader', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_advance_option_content',
		'default'  => '1',
		'priority' => 10,
	)
);

Kirki::add_field(
	'eshopping_cart_config', array(
		'type'     => 'toggle',
		'settings' => 'eshopping_cart_enable_scroll_top',
		'label'    => __( 'Enable Scroll to Top', 'eshopping-cart' ),
		'section'  => 'eshopping_cart_advance_option_content',
		'default'  => '1',
		'priority' => 15,
	)
);
/* end of advance options */