<?php
function onepay_data_menu() {
    $page_title = 'Onepay Data';
    $menu_title = 'Onepay Data';
    $capability = 'manage_options';
    $menu_slug = 'onepay-data';
    $function = 'onepay_data_page';
    $icon_url = 'dashicons-money-alt';
    $position = 25;

    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);

    // Submenu pages
    // add_submenu_page($menu_slug, 'Add New', 'Add New', $capability, 'onepay-data-add', 'onepay_data_add_page');
    // add_submenu_page($menu_slug, 'Edit', 'Edit', $capability, 'onepay-data-edit', 'onepay_data_edit_page');
}
add_action('admin_menu', 'onepay_data_menu');

function onepay_data_page() {
    onepay_tran_update();

    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM wp_onepay");

    echo '<div class="wrap">';
        echo '<h1 class="wp-heading-inline">Onepay Data</h1>';
        // echo '<a href="' . admin_url('admin.php?page=onepay-data-add') . '" class="page-title-action">Add New</a>';
        echo '<hr class="wp-header-end">';

        echo '<table class="wp-list-table widefat fixed striped" style="margin-top: 15px;">';
            echo '<thead><tr><th>vpc_Merchant</th><th>vpc_Customer_Email</th><th>vpc_MerchTxnRef</th><th>vpc_Message</th><th>vpc_TxnResponseCode</th></tr></thead>';
            echo '<tbody>';
                foreach ($results as $row) {
                    echo '<tr>';
                        echo '<td>' . esc_html($row->vpc_Merchant) . '</td>';
                        echo '<td>' . esc_html($row->vpc_Customer_Email) . '</td>';
                        echo '<td>' . esc_html($row->vpc_MerchTxnRef) . '</td>';
                        echo '<td>' . esc_html($row->vpc_Message) . '</td>';
                        echo '<td>' . esc_html($row->vpc_TxnResponseCode) . '</td>';
                        // echo '<td><a href="' . admin_url('admin.php?page=onepay-data-edit&id=' . $row->id) . '">Edit</a> | <a href="#" class="delete-link" data-id="' . $row->id . '">Delete</a></td>';
                    echo '</tr>';
                }
            echo '</tbody>';
        echo '</table>';
    echo '</div>';
}

function onepay_tran_update(){
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/QueryDR.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/Util.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/Config.php';
    
    // Thông tin merchant
    $merchantId = Config::MERCHANT_PAYNOW_ID;
    $merchantAccessCode = Config::MERCHANT_PAYNOW_ACCESS_CODE;
    $merchantHashCode = Config::MERCHANT_PAYNOW_HASH_CODE;
    
    // Khởi tạo đối tượng queryDRApi
    $queryDRApi = new QueryDR($merchantId, $merchantAccessCode, $merchantHashCode);

    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM wp_onepay WHERE vpc_TxnResponseCode = 300 OR vpc_TxnResponseCode = 100");

    foreach ($results as $row) {
        $response = $queryDRApi->queryDRApi($row->vpc_MerchTxnRef);
        if( str_contains($response, 'vpc_TxnResponseCode') ){
            parse_str($response, $arrayResponse);
            if( isset( $arrayResponse['vpc_TxnResponseCode'] ) ){
                $wpdb->update( 
                    'wp_onepay', 
                    array('vpc_TxnResponseCode' => $arrayResponse['vpc_TxnResponseCode']), 
                    array('vpc_MerchTxnRef' => $row->vpc_MerchTxnRef)
                );
            }
        }
    }
}