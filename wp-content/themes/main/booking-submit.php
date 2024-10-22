<?php
    // include_once __DIR__.'/vendor/autoload.php';
    // use PHPMailer\PHPMailer\PHPMailer;

    // Send Email
    // if( !empty( $_GET['tour_name'] ) ){

    //     $info  = '';
    //     $info .= 'Tour name: '.$_GET['tour_name'].'<br>';
    //     $info .= 'Tour price: '.$_GET['tour_price'].'<br>';
    //     $info .= 'First name: '.$_GET['firstname'].'<br>';
    //     $info .= 'Last name: '.$_GET['lastname'].'<br>';
    //     $info .= 'Email: '.$_GET['email'].'<br>';
    //     $info .= 'Phone number: '.$_GET['phone_number'].'<br>';
    //     $info .= 'Number adult: '.$_GET['number_adult'].'<br>';
    //     $info .= 'Number children: '.$_GET['number_children'].'<br>';
    //     $info .= 'Departure date: '.$_GET['departure_date'].'<br>';
    //     $info .= 'Special request: '.$_GET['special_request'].'<br>';
        
    //     try{
    //         $mail = new PHPMailer();
    //         $mail->CharSet = "utf-8";
    //         $mail->isSMTP();
    //         $mail->Host = 'smtp.gmail.com';
    //         $mail->SMTPAuth = true;
    //         $mail->Username = 'victoryeratravel@gmail.com';
    //         $mail->Password = 'suou mxxf cthl xmpq';
    //         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //         $mail->Port = 587;
    //         $mail->addAddress( 'victoryeratravel@gmail.com' );
    //         $mail->isHTML(true);
    //         $mail->setFrom('victoryeratravel@gmail.com', 'Victoryeratravel');
    //         $mail->Subject = 'Booking from Victoryeratravel !';
    //         $mail->Body = $info;
    //         $mail->send();
        
    //     }catch (Exception $e){
    //         return $e;
    //     }

    //     if (!$mail->send()) {
    //         echo 'Mailer Error: ' . $mail->ErrorInfo;
    //     } else {
    //         echo 'The email message was sent.';
    //     }
        
    // }

    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/CreateInvoice.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/Util.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/Config.php'; // Giả định bạn có file cấu hình với các hằng số BASE_URL, URL_PREFIX
    
    // Thông tin merchant
    $merchantId = Config::MERCHANT_PAYNOW_ID;
    $merchantAccessCode = Config::MERCHANT_PAYNOW_ACCESS_CODE;
    $merchantHashCode = Config::MERCHANT_PAYNOW_HASH_CODE;
    
    // Khởi tạo đối tượng CreateInvoice
    $invoice = new CreateInvoice($merchantId, $merchantAccessCode, $merchantHashCode);
    
    // Gọi hàm cInvoice để lấy URL
    $redirectUrl = $invoice->cInvoice($_GET);
    
    // Thực hiện redirect 302
    header("Location: $redirectUrl", true, 302);
    exit();
    // Bạn có thể chuyển hướng người dùng đến trang khác hoặc hiển thị thông báo thành công ở đây
    // header('Location: success_page.php');
    // exit();


