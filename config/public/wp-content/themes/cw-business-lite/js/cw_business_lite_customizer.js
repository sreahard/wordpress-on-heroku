jQuery(document).ready(function() {
	
	/* Upsells in customizer */
	if( !jQuery( ".cw-business-lite-upsells" ).length ) {
		jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section cw-business-lite-upsells">');
	}

	if( jQuery( ".cw-business-lite-upsells" ).length ) {

		jQuery('.cw-business-lite-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="https://wordpress.org/support/view/theme-reviews/cw-business-lite" class="button" target="_blank">Leave a review ( it will help us )</a>');
		jQuery('.cw-business-lite-upsells').append('<a style="width: 80%; margin: 5px auto 20px auto; display: block; text-align: center;" href="https://themeisle.com/documentation-cw-business-lite" class="button" target="_blank">Documentation</a>');
		jQuery('.cw-business-lite-upsells').append('<a style="width: 80%; margin: 20px auto 5px auto; display: block; text-align: center;" href="https://themeisle.com/themes/movatique-business-wordpress-theme/" class="button" target="_blank">View PRO version</a>');
		
	}

	if ( !jQuery( ".cw-business-lite-upsells" ).length ) {
		jQuery('#customize-theme-controls > ul').prepend('</li>');
	}

});
