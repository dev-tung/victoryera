<?php
require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');

class Logging
{
    private $wpdb;

    public function __construct()
    {
        global $wpdb;
        $this->wpdb = $wpdb;
    }

    public function insert($params){
        $this->wpdb->insert( 'wp_onepay', $params);
    }

    public function response($params){
        $this->wpdb->update( 
            'wp_onepay', 
            array(
                'vpc_Amount' => $params['vpc_Amount'],
                'vpc_MerchTxnRef' => $params['vpc_MerchTxnRef'],
                'vpc_OrderInfo' => $params['vpc_OrderInfo'],
                'vpc_TxnResponseCode' => $params['vpc_TxnResponseCode'],
                'vpc_Message' => $params['vpc_Message']
            ), 
            array('vpc_MerchTxnRef' => $params['vpc_MerchTxnRef'])
        );
    }
}

