<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://woocommerce.ezosc.com
 * @since      1.0.0
 *
 * @package    Woo_Extras_Vividseats_Affiliate
 * @subpackage Woo_Extras_Vividseats_Affiliate/admin/partials
 */
?>

<div class="wrap">

    <div class="wrap about-wrap">

        <h1>Sequential Order Numbers Configuration</h1>

        <div class="about-text">For support, e-mail <a href="https://woocommerce.ezosc.com/?utm_source=wp-extras-son&utm_medium=link&utm_campaign=wp-extras-son%20support">support@ezosc.com</a></div>

        <h2 class="nav-tab-wrapper">
            <a href="#clean-up" class="nav-tab nav-tab-active"><?php _e('Settings', $this->plugin_name); ?></a>
        </h2>

        <form method="post" name="setting_options" action="options.php">
            <?php
            // /*
            // * Grab all value if already set
            // *
            // */
            $options = get_option($this->plugin_name);

            global $menu;

            // Settings
            $woo_extra_son_ons = $options['woo_extra_son_ons'];
            $woo_extra_son_onp = $options['woo_extra_son_onp'];
            $woo_extra_son_onpa = $options['woo_extra_son_onpa'];
            $woo_extra_son_onsu = $options['woo_extra_son_onsu'];

            /*
             * Set up hidden fields
             *
             */
            settings_fields($this->plugin_name);
            do_settings_sections($this->plugin_name);


            // Include tabs partials
            require_once('admin-settings.php');
            ?>

            <p class="submit">
                <?php submit_button(__('Save all changes', $this->plugin_name), 'primary', 'submit', TRUE); ?>
            </p>

        </form>
    </div>

</div>
