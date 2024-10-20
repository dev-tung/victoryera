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

    public function success($params){
        if( $params['vpc_TxnResponseCode'] != 0 ){
            echo '<pre>';
            print_r($params);
            echo '</pre>';
            die('There was an error!');
        }
        
        $this->wpdb->update( 
            'wp_onepay', 
            array(
                'vpc_Card' => $params['vpc_Card'],
                'vpc_CardNum' => $params['vpc_CardNum'],
                'vpc_CardUid' => $params['vpc_CardUid'],
                'vpc_TransactionNo' => $params['vpc_TransactionNo'],
                'vpc_TxnResponseCode' => $params['vpc_TxnResponseCode'],
                'vpc_Message' => $params['vpc_Message'],
                'vpc_PayChannel' => $params['vpc_PayChannel']
            ), 
            array('vpc_MerchTxnRef' => $params['vpc_MerchTxnRef'])
        );
    }
}

