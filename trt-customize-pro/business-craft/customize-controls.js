( function( api ) {

	// Extends our custom "business-craft" section.
	api.sectionConstructor['business-craft'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
	jQuery( "#accordion-panel-business-craft-theme-options" ).addClass( "sudeep-class" );

} )( wp.customize );
