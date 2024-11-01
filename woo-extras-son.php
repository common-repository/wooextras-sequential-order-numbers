<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WooExtras Sequential Order Numbers
 * Plugin URI:        https://woocommerce.ezosc.com
 * Description:       Provides sequential order numbers for WooCommerce orders.
 * Version:           1.2.0
 * Author:            ezosc
 * Author URI:        http://www.ezosc.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-extras-son
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-extras-son-activator.php
 */
function activate_woo_extras_son() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-extras-son-activator.php';
	Woo_Extras_Son_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-extras-son-deactivator.php
 */
function deactivate_woo_extras_son() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-extras-son-deactivator.php';
	Woo_Extras_Son_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_extras_son' );
register_deactivation_hook( __FILE__, 'deactivate_woo_extras_son' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-extras-son.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_extras_son() {

	$plugin = new Woo_Extras_Son();
	$plugin->run();

}
run_woo_extras_son();

/*
 * The core plugin class that is used to define internationalization,
*/
function woo_extra_son_links($links, $file) {
	if ($file == plugin_basename(__FILE__)) {
		$links[]  = '<a target="_blank" href="https://ezosc.com/?utm_source=wp-extras-son&utm_medium=link-plugins&utm_campaign=wp-extras-son%20get%20support" title="Get Support" style="padding:1px 5px;color:#fff;background:#feba12;border-radius:1px;">We&nbsp;provide&nbsp;WP&nbsp;Support</a>';
	}
	return $links;
}
add_filter('plugin_row_meta', 'woo_extra_son_links', 10, 2);