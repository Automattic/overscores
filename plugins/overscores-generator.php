<?php

/**
 * Renders the generator form
 */
function overscores_print_form() {
	get_template_part( 'templates/partial-form' );
}
add_action( 'overscores_print_form', 'overscores_print_form' );

