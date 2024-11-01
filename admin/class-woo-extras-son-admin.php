<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.ezosc.com
 * @since      1.0.0
 *
 * @package    Woo_Extras_Son
 * @subpackage Woo_Extras_Son/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Extras_Son
 * @subpackage Woo_Extras_Son/admin
 * @author     ezosc <support@ezosc.com>
 */
class Woo_Extras_Son_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woo_Extras_Son_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woo_Extras_Son_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/woo-extras-son-admin.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woo_Extras_Son_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woo_Extras_Son_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/woo-extras-son-admin.js', array('jquery'), $this->version, false);
    }

    /**
     * Register the administration menu for this plugin into the WordPress Dashboard menu.
     *
     * @since    1.0.0
     */
    public function add_plugin_admin_menu() {

        add_submenu_page( 'woocommerce', 
                'Sequential Order Numbers Configuration', 
                'Sequential Order # Configuration', 
                'manage_options', 
                'wp-extras-son', 
                array($this, 'display_plugin_setup_page') );
    }

    /**
     * Render the settings page for this plugin.
     *
     * @since    1.0.0
     */
    public function display_plugin_setup_page() {
        include_once( 'partials/admin-display.php' );
    }

    /**
     *  Save the plugin options
     *
     *
     * @since    1.0.0
     */
    public function options_update() {
        register_setting( $this->plugin_name, $this->plugin_name, array($this, 'validate') );
    }
    
    public function validate($input) {
        // All checkboxes inputs
        $options = get_option($this->plugin_name);
        $valid = array();
        
        $valid['woo_extra_son_ons'] = $input['woo_extra_son_ons'];
        $valid['woo_extra_son_onp'] = $input['woo_extra_son_onp'];
        $valid['woo_extra_son_onsu'] = $input['woo_extra_son_onsu'];
        $valid['woo_extra_son_onpa'] = $input['woo_extra_son_onpa'];
       
        return $valid;
        
    }    
}
