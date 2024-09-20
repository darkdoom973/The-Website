<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class Optical_Lens_Shop_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'optical-lens-shop-typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'optical-lens-shop' ),
				'family'      => esc_html__( 'Font Family', 'optical-lens-shop' ),
				'size'        => esc_html__( 'Font Size',   'optical-lens-shop' ),
				'weight'      => esc_html__( 'Font Weight', 'optical-lens-shop' ),
				'style'       => esc_html__( 'Font Style',  'optical-lens-shop' ),
				'line_height' => esc_html__( 'Line Height', 'optical-lens-shop' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'optical-lens-shop' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'optical-lens-shop-ctypo-customize-controls' );
		wp_enqueue_style(  'optical-lens-shop-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'optical-lens-shop' ),
        'Abril Fatface' => __( 'Abril Fatface', 'optical-lens-shop' ),
        'Acme' => __( 'Acme', 'optical-lens-shop' ),
        'Anton' => __( 'Anton', 'optical-lens-shop' ),
        'Architects Daughter' => __( 'Architects Daughter', 'optical-lens-shop' ),
        'Arimo' => __( 'Arimo', 'optical-lens-shop' ),
        'Arsenal' => __( 'Arsenal', 'optical-lens-shop' ),
        'Arvo' => __( 'Arvo', 'optical-lens-shop' ),
        'Alegreya' => __( 'Alegreya', 'optical-lens-shop' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'optical-lens-shop' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'optical-lens-shop' ),
        'Bangers' => __( 'Bangers', 'optical-lens-shop' ),
        'Boogaloo' => __( 'Boogaloo', 'optical-lens-shop' ),
        'Bad Script' => __( 'Bad Script', 'optical-lens-shop' ),
        'Bitter' => __( 'Bitter', 'optical-lens-shop' ),
        'Bree Serif' => __( 'Bree Serif', 'optical-lens-shop' ),
        'BenchNine' => __( 'BenchNine', 'optical-lens-shop' ),
        'Cabin' => __( 'Cabin', 'optical-lens-shop' ),
        'Cardo' => __( 'Cardo', 'optical-lens-shop' ),
        'Courgette' => __( 'Courgette', 'optical-lens-shop' ),
        'Cherry Swash' => __( 'Cherry Swash', 'optical-lens-shop' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'optical-lens-shop' ),
        'Crimson Text' => __( 'Crimson Text', 'optical-lens-shop' ),
        'Cuprum' => __( 'Cuprum', 'optical-lens-shop' ),
        'Cookie' => __( 'Cookie', 'optical-lens-shop' ),
        'Chewy' => __( 'Chewy', 'optical-lens-shop' ),
        'Days One' => __( 'Days One', 'optical-lens-shop' ),
        'Dosis' => __( 'Dosis', 'optical-lens-shop' ),
        'Droid Sans' => __( 'Droid Sans', 'optical-lens-shop' ),
        'Economica' => __( 'Economica', 'optical-lens-shop' ),
        'Fredoka One' => __( 'Fredoka One', 'optical-lens-shop' ),
        'Fjalla One' => __( 'Fjalla One', 'optical-lens-shop' ),
        'Francois One' => __( 'Francois One', 'optical-lens-shop' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'optical-lens-shop' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'optical-lens-shop' ),
        'Great Vibes' => __( 'Great Vibes', 'optical-lens-shop' ),
        'Handlee' => __( 'Handlee', 'optical-lens-shop' ),
        'Hammersmith One' => __( 'Hammersmith One', 'optical-lens-shop' ),
        'Inconsolata' => __( 'Inconsolata', 'optical-lens-shop' ),
        'Indie Flower' => __( 'Indie Flower', 'optical-lens-shop' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'optical-lens-shop' ),
        'Julius Sans One' => __( 'Julius Sans One', 'optical-lens-shop' ),
        'Josefin Slab' => __( 'Josefin Slab', 'optical-lens-shop' ),
        'Josefin Sans' => __( 'Josefin Sans', 'optical-lens-shop' ),
        'Kanit' => __( 'Kanit', 'optical-lens-shop' ),
        'Lobster' => __( 'Lobster', 'optical-lens-shop' ),
        'Lato' => __( 'Lato', 'optical-lens-shop' ),
        'Lora' => __( 'Lora', 'optical-lens-shop' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'optical-lens-shop' ),
        'Lobster Two' => __( 'Lobster Two', 'optical-lens-shop' ),
        'Merriweather' => __( 'Merriweather', 'optical-lens-shop' ),
        'Monda' => __( 'Monda', 'optical-lens-shop' ),
        'Montserrat' => __( 'Montserrat', 'optical-lens-shop' ),
        'Muli' => __( 'Muli', 'optical-lens-shop' ),
        'Marck Script' => __( 'Marck Script', 'optical-lens-shop' ),
        'Noto Serif' => __( 'Noto Serif', 'optical-lens-shop' ),
        'Open Sans' => __( 'Open Sans', 'optical-lens-shop' ),
        'Overpass' => __( 'Overpass', 'optical-lens-shop' ),
        'Overpass Mono' => __( 'Overpass Mono', 'optical-lens-shop' ),
        'Oxygen' => __( 'Oxygen', 'optical-lens-shop' ),
        'Orbitron' => __( 'Orbitron', 'optical-lens-shop' ),
        'Patua One' => __( 'Patua One', 'optical-lens-shop' ),
        'Pacifico' => __( 'Pacifico', 'optical-lens-shop' ),
        'Padauk' => __( 'Padauk', 'optical-lens-shop' ),
        'Playball' => __( 'Playball', 'optical-lens-shop' ),
        'Playfair Display' => __( 'Playfair Display', 'optical-lens-shop' ),
        'PT Sans' => __( 'PT Sans', 'optical-lens-shop' ),
        'Philosopher' => __( 'Philosopher', 'optical-lens-shop' ),
        'Permanent Marker' => __( 'Permanent Marker', 'optical-lens-shop' ),
        'Poiret One' => __( 'Poiret One', 'optical-lens-shop' ),
        'Quicksand' => __( 'Quicksand', 'optical-lens-shop' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'optical-lens-shop' ),
        'Raleway' => __( 'Raleway', 'optical-lens-shop' ),
        'Rubik' => __( 'Rubik', 'optical-lens-shop' ),
        'Rokkitt' => __( 'Rokkitt', 'optical-lens-shop' ),
        'Russo One' => __( 'Russo One', 'optical-lens-shop' ),
        'Righteous' => __( 'Righteous', 'optical-lens-shop' ),
        'Slabo' => __( 'Slabo', 'optical-lens-shop' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'optical-lens-shop' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'optical-lens-shop'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'optical-lens-shop' ),
        'Sacramento' => __( 'Sacramento', 'optical-lens-shop' ),
        'Shrikhand' => __( 'Shrikhand', 'optical-lens-shop' ),
        'Tangerine' => __( 'Tangerine', 'optical-lens-shop' ),
        'Ubuntu' => __( 'Ubuntu', 'optical-lens-shop' ),
        'VT323' => __( 'VT323', 'optical-lens-shop' ),
        'Varela Round' => __( 'Varela Round', 'optical-lens-shop' ),
        'Vampiro One' => __( 'Vampiro One', 'optical-lens-shop' ),
        'Vollkorn' => __( 'Vollkorn', 'optical-lens-shop' ),
        'Volkhov' => __( 'Volkhov', 'optical-lens-shop' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'optical-lens-shop' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'optical-lens-shop' ),
			'100' => esc_html__( 'Thin',       'optical-lens-shop' ),
			'300' => esc_html__( 'Light',      'optical-lens-shop' ),
			'400' => esc_html__( 'Normal',     'optical-lens-shop' ),
			'500' => esc_html__( 'Medium',     'optical-lens-shop' ),
			'700' => esc_html__( 'Bold',       'optical-lens-shop' ),
			'900' => esc_html__( 'Ultra Bold', 'optical-lens-shop' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'optical-lens-shop' ),
			'normal'  => esc_html__( 'Normal', 'optical-lens-shop' ),
			'italic'  => esc_html__( 'Italic', 'optical-lens-shop' ),
			'oblique' => esc_html__( 'Oblique', 'optical-lens-shop' )
		);
	}
}
