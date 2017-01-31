<?php
/*
 * @wordpress-plugin
 * Plugin Name: Carbon Field: Hidden
 * Plugin URI:  https://github.com/schrapel/carbon-fields-hidden
 * Description: Extends the base Carbon Fields with a Hidden field.
 * Version:     1.0.1
 * Author:      Toby Schrapel
 * Author URI:  https://tobyschrapel.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Hook field initialization
 */
add_action( 'after_setup_theme', 'crb_init_carbon_field_hidden', 15 );
function crb_init_carbon_field_hidden() {
	if ( class_exists( 'Carbon_Fields\\Field\\Field' ) ) {
		include_once dirname(__FILE__) . '/Hidden_Field.php';
	}
}
