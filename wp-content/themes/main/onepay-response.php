<?php
    // Template Name: Onepay Response
    include_once $_SERVER['DOCUMENT_ROOT'].'/wp-includes'.'/onepay/Logging.php';
    $logging = new Logging();
    $logging->response($_GET);
?> 

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
  <style>
    body {
      text-align: center;
      background: #EBF0F5;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .Card {
      background: white;
      padding: 30px;
      border-radius: 4px;
      box-shadow: 0 2px 3px #C8D0D8;
      display: inline-block;
      margin: 0 auto;
      width: max-content;
    }

    .Card-Message {
      color: #404F5E;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-size: 20px;
      margin: 0;
    }

    .Card-Link {
      color: #0081ad;
      display: block;
      margin-top: 15px;
      font-size: 18px;
    }

    .CardThumnail {
      border-radius: 100px;
      height: 100px;
      width: 100px;
      background: #F8FAF5;
      margin: 0 auto;
    }

    .CardThumnail-Icon {
      font-size: 40px;
      line-height: 100px;
    }

    .Card--Success .CardThumnail-Icon{
      margin-left: -10px;
    }

    .Card-Title {
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-weight: 900;
      font-size: 30px;
      margin: 15px 0;
    }

    .Card--Success .Card-Title,
    .Card--Success .CardThumnail-Icon{
      color: #4caf50;
    }

    .Card--Failed .Card-Title,
    .Card--Failed .CardThumnail-Icon{
      color: #fc3636;
    }
  </style>
  <body>
    <?php if($_GET['vpc_TxnResponseCode'] == '0'): ?>
      <div class="Card Card--Success">
        <div class="CardThumnail">
          <i class="CardThumnail-Icon">✓</i>
        </div>
        <h1 class="Card-Title Card-Title--Success">Success</h1>
        <p class="Card-Message">We received your booking request, <br /> we'll be in touch shortly! </p>
        <a class="Card-Link" href="<?php echo home_url(); ?>">Back to home page </a>
      </div>
    <?php else: ?>
      <div class="Card Card--Failed">
        <div class="CardThumnail">
          <span class="CardThumnail-Icon"><?php echo $_GET['vpc_TxnResponseCode'];?></span>
        </div>
        <h1 class="Card-Title"><?php echo $_GET['vpc_Message']; ?></h1>
        <p class="Card-Message">
          Your booking request is not completed! <br /> Please contact to admin and provide your ID(<?php echo $_GET['vpc_MerchTxnRef'];?>) to check!
        </p>
        <a class="Card-Link" href="<?php echo home_url(); ?>">Back to home page </a>
      </div>
    <?php endif; ?>
  </body>
</html>