<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/translatio-io/translatio
 * @since             1.0.0
 * @package           translatio_G11n
 *
 * @wordpress-plugin
 * Plugin Name:       translatio Globalization
 * Plugin URI:        https://github.com/translatio-io/translatio
 * Description:       Translating your application into other languages.
 * Version:           1.9.0
 * Author:            Yu Shao
 * Author URI:        https://github.com/translatio-io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       translatio-g11n
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TRANSLATIO_VERSION', '1.9.0' );
define( 'WP_TRANSLATIO_DEBUG', false );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-translatio-g11n-activator.php
 */
function activate_translatio_g11n( $network_wide ) {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-translatio-g11n-activator.php';
	translatio_G11n_Activator::activate( $network_wide );
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_translatio_g11n() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-translatio-g11n-deactivator.php';
	translatio_G11n_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_translatio_g11n' );
register_deactivation_hook( __FILE__, 'deactivate_translatio_g11n' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

require plugin_dir_path( __FILE__ ) . 'includes/class-translatio-g11n-widget.php';

require plugin_dir_path( __FILE__ ) . 'includes/class-translatio-g11n.php';

require plugin_dir_path( __FILE__ ) . 'includes/translatio-g11n-plugin-globals.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_translatio_g11n() {

	$plugin = new translatio_G11n();
	$plugin->run();

}
run_translatio_g11n();
