<?php
include_once 'Util.php';
include_once 'Logging.php';

class CreateInvoice
{
    private $merchantId;
    private $merchantAccessCode;
    private $merchantHashCode;
    public function __construct($merchantId, $merchantAccessCode, $merchantHashCode)
    {
        $this->merchantId = $merchantId;
        $this->merchantAccessCode = $merchantAccessCode;
        $this->merchantHashCode = $merchantHashCode;
    }
    public function cInvoice( $params )
    {
        $vpcMerchantTxnRef = "TEST_" . time();
        $merchantParam = [
            "vpc_Version" => "2",
            "vpc_Currency" => "VND",
            "vpc_Command" => "pay",
            "vpc_AccessCode" => $this->merchantAccessCode,
            "vpc_MerchTxnRef" => $vpcMerchantTxnRef,
            "vpc_Merchant" => $this->merchantId,
            "vpc_Locale" => "en",
            "vpc_ReturnURL" => $params['again_url'],
            "vpc_OrderInfo" => "Ma Don Hang",
            "vpc_Amount" => "10000000",
            "vpc_TicketNo" => "192.168.166.149",
            "AgainLink" => $params['again_url'],
            "Title" => "PHP VPC 3-Party",
            "vpc_Customer_Phone" => $params['phone_number'],
            "vpc_Customer_Email" => $params['email'],
            "vpc_Customer_Id" => "test"
        ];
        
        $util = new Util();
        ksort($merchantParam);
        $stringToHash = $util->generateStringToHash($merchantParam);
        $secureHash = $util->generateSecureHash($stringToHash, $this->merchantHashCode);
        // Thêm tham số mới
        $merchantParam['vpc_SecureHash'] = $secureHash;

        // Logging
        $logging = new Logging();
        $logging->insert($merchantParam);

        $requestUrl = Config::BASE_URL . Config::URL_PREFIX . http_build_query($merchantParam);
        return $requestUrl;
    }
}