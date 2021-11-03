<?php

require_once 'vendor/autoload.php';


//$qr = new Endroid\QrCode\QrCode();

//methods

//$qr->setText('QrCode');
//$qr->setSize(200);
//$qr->setPadding(10);

//$qr-render();
/*
if (isset($_POST['btn-submit'])) {
    
    $qrString = $_POST['qrCode'];
    
    $qrCode = new Endroid\QrCode\QrCode($qrString);
    
    $qrCode->setSize(200);
    //$qrCode->setPadding(10);
    
    header('Content-Type: '.$qrCode->getContentType());//image/png
    echo $qrCode->writeString();
}
echo '
<div class="qr">
    <img src="index.php" alt="qr code" srcset="">
</div>
';
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrCode</title>
    
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrCode</title>
</head>

<body>
    <div>
        <p>Here is your QR code!</p>
        <img src="qrcode.php?text=<?php echo $_SESSION['qr'];?>&size=200" alt="QR Code" srcset="">
    </div>

    <form action="qrcode.php" method="GET">
        <input type="text" name="qrcode">
        <input type="submit" name="submit">
    </form>

</body>

</html>
    
</body>
</html>