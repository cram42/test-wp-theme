<?php
/**
 * Registration Form Template - Name Fields
 * - First Name
 * - Last Name
 */

defined('ABSPATH') || exit;

?>

<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
    <label for="first_name"><?php esc_html_e( 'First name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    <input 
        type="text"
        class="woocommerce-Input woocommerce-Input--text input-text form-control"
        name="first_name"
        id="first_name"
        value="<?php echo(!empty($_POST['first_name'])) ? esc_attr(wp_unslash($_POST['first_name'])) : ''; ?>" />
</p>
<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
    <label for="last_name"><?php esc_html_e( 'Last name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    <input 
        type="text"
        class="woocommerce-Input woocommerce-Input--text input-text form-control"
        name="last_name"
        id="last_name"
        value="<?php echo(!empty($_POST['last_name'])) ? esc_attr(wp_unslash($_POST['last_name'])) : ''; ?>" />
</p>
