<?php
/**
 * Partial of the clean up settings
 *
 *
 *
 * @link       http://lostwebdesigns.com
 * @since      1.0.0
 *
 * @package    Wp_Cbf
 * @subpackage Wp_Cbf/admin/partials
 */
?>

<div id="admin-custom" class="wrap metabox-holder columns-2 wp_cbf-metaboxes">

    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Order Number Padding:', $this->plugin_name); ?></span></legend>
        <label for="<?php echo $this->plugin_name; ?>-woo_extra_son_ons">
            <span><?php esc_attr_e('Order Number Padding:', $this->plugin_name); ?></span>
        </label>
        <input type="text" class="regular-text" 
               id="<?php echo $this->plugin_name; ?>-woo_extra_son_ons" 
               name="<?php echo $this->plugin_name; ?>[woo_extra_son_ons]" 
               value="<?php if (!empty($woo_extra_son_ons)) esc_attr_e($woo_extra_son_ons, $this->plugin_name); ?>" />
    <br>Ex:
    <br>  Default Woocommerce Order Number = 4567
    <br>  Order Number Padding= 1000000   
    <br>  New Order Number = 1000000 + 4567 = 1004567
    </fieldset>
    <!--
    <br>
    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Order Number Length:', $this->plugin_name); ?></span></legend>
        <label for="<?php echo $this->plugin_name; ?>-woo_extra_son_onpa">
            <span><?php esc_attr_e('Order Number Length:', $this->plugin_name); ?></span>
        </label>
        <input type="text" class="regular-text" 
               id="<?php echo $this->plugin_name; ?>-woo_extra_son_onpa" 
               name="<?php echo $this->plugin_name; ?>[woo_extra_son_onpa]" 
               value="<?php if (!empty($woo_extra_son_onpa)) esc_attr_e($woo_extra_son_onpa, $this->plugin_name); ?>" />
    </fieldset> 
    -->
    <br>
    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Order Number Prefix:', $this->plugin_name); ?></span></legend>
        <label for="<?php echo $this->plugin_name; ?>-woo_extra_son_onp">
            <span><?php esc_attr_e('Order Number Prefix:', $this->plugin_name); ?></span>
        </label>
        <input type="text" class="regular-text" 
               id="<?php echo $this->plugin_name; ?>-woo_extra_son_onp" 
               name="<?php echo $this->plugin_name; ?>[woo_extra_son_onp]" 
               value="<?php if (!empty($woo_extra_son_onp)) esc_attr_e($woo_extra_son_onp, $this->plugin_name); ?>" />
        Ex: Prefix-####
    </fieldset>
    <!--
    <br>
    <fieldset>
        <legend class="screen-reader-text"><span><?php _e('Order Number Suffix:', $this->plugin_name); ?></span></legend>
        <label for="<?php echo $this->plugin_name; ?>-woo_extra_son_onsu">
            <span><?php esc_attr_e('Order Number Suffix:', $this->plugin_name); ?></span>
        </label>
        
        <input type="text" class="regular-text" 
               id="<?php echo $this->plugin_name; ?>-woo_extra_son_onsu" 
               name="<?php echo $this->plugin_name; ?>[woo_extra_son_onsu]" 
               value="<?php if (!empty($woo_extra_son_onsu)) esc_attr_e($woo_extra_son_onsu, $this->plugin_name); ?>" />
        Ex: ####-
    </fieldset>
    -->
    <br>
    Current configuration out put example: <?php echo WC_EZOSC_Seq_Order_Number::generate_order_number(rand(1,9)); ?>
</div>
