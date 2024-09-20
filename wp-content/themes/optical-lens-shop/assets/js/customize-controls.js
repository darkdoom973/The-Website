( function( api ) {

	// Extends our custom "optical-lens-shop" section.
	api.sectionConstructor['optical-lens-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );