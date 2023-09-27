<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 *
 * @package    Translatio
 * @subpackage Translatio/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Translatio
 * @subpackage Translatio/includes
 * @author     Yu Shao <yu.shao.gm@gmail.com>
 */
class Translatio_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function translatio_load_plugin_textdomain() {

		load_plugin_textdomain(
			'translatio-globalization',
			false,
			//dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
                        WP_LANG_DIR . '/plugins/' 
		);

	}



}
