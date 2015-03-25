/**
 * Underscores.me specific javascript functionality
 */
jQuery( function( $ ) {
	var advanced, simple,
		form = $('#overscores-generator');

	advanced = $('<a href="#" class="generator-form-optionstoggle">Advanced Options</a>').appendTo('.form-primary');

	advanced.click( function( event ) {
		form.toggleClass('generator-form-collapsed');
		event.preventDefault();
	});
});