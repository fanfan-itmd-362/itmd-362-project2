<?php
$ordernumber = time() - 1500000000 + rand(0, 99);
$email = $_REQUEST['email'];
$event = $_REQUEST['event'];
$provider = $_REQUEST['provider'];
$time = $_REQUEST['time'];
$seats = $_REQUEST['seats'];
$amount = strlen(preg_replace('/, /', '', $seats)) / 2 * 12;
$cardNumber = $_REQUEST['cardnumber'];
$cardType = $_REQUEST['cardType'];
?>

<!DOCTYPE html>
<html lang="en" class="nojs" id="payment">

<head>
  <title>Payment</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet" />
  <link rel="stylesheet" media="screen" href="../screen.css" />
  <link rel="stylesheet" media="print" href="print.css" />
  <link rel="stylesheet" href="#//basehold.it/22" />
</head>

<body>
  <header>
    <a href="../index.html">
      <h1>IIT<span class="white">ALK</span></h1>
    </a>
  </header>
  <main id="payment-container">
    <section id="conformation">
      <h2>Your Confirmation</h2>
      <ol class="ticket-info conformation">
        <li><h3>Order number: <?php echo $ordernumber ?></h3></li>
        <li><?php echo $event ?></li>
        <li class="padding"><?php echo $provider ?></li>
        <li><?php echo $time ?></li>
        <li class="padding">Seat(s): <?php echo $seats ?></li>
        <li class="total">Total: $ <?php echo $amount ?></li>
        <li class="padding"><?php echo "Paid by: " . $cardType . " " . substr($cardNumber, -4) ?></li>
        <li class="qrcode"><img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&amp;data=<?php echo $ordernumber ?>" /></li>
        <li>Please check your email for your ticket information or print out this page.</li>
      </ol>
    </section>
  </main>
  <aside id="back">
    <a href="../index.html" id="previouspage">Back Home</a>
  </aside>
  <footer>
    <p id="footer">2018 &copy; Copyright IIT<span class="white">ALK</span></p>
  </footer>
</body>

</html>
