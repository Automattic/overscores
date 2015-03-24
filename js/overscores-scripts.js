/**
 * Underscores.me specific javascript functionality
 */
jQuery( function( $ ) {
	var advanced, simple,
		form = $('#generator-form');

	advanced = $('<a href="#" class="generator-form-optionstoggle">Advanced Options</a>').appendTo('.generator-form-primary');

	advanced.click( function( event ) {
		form.toggleClass('generator-form-skinny');
		event.preventDefault();
	});
});