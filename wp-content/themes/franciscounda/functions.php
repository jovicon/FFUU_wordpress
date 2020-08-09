<?php
// Add custom Theme Functions here

function wooc_extra_register_fields() {?>
    <!-- 
    <p class="form-row form-row-wide">
        <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?></label>
        <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php esc_attr_e( $_POST['billing_phone'] ); ?>" />
    </p> 
    -->

    <p class="form-row form-row-first">
        <label for="reg_billing_first_name"><?php _e( 'RUT', 'woocommerce' ); ?><span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </p>
    
    <!-- 
    <p class="form-row form-row-last">
        <label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label>
        <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
    </p> 
    -->
    
    <div class="clear"></div>
    <?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );



function wooc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        //First name field which is by default
        update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        // First name field which is used in WooCommerce
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
    }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );



function debug_cf7_add_error( $items, $result ) {
    if ( 'mail_failed' == $result['status'] ) {
        global $phpmailer;
        $items['errorInfo'] = $phpmailer->ErrorInfo;
    }
    return $items;
}
add_action( 'wpcf7_ajax_json_echo', 'debug_cf7_add_error', 10, 2 );