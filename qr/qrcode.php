<?php
session_start();

require_once 'vendor/autoload.php';


//$qr = new Endroid\QrCode\QrCode();

//methods

//$qr->setText('QrCode');
//$qr->setSize(200);
//$qr->setPadding(10);

//$qr-render();

if(isset($_GET['text'])){

    //$_POST['qrcode'];
    //$_SESSION['qr'] = $_GET['text'];
    $size = isset($_GET['size']) ? $_GET['size'] : 200;
    //$padding = isset($_GET['padding']) ? $_GET['padding'] : 10;
    //die("SESSION".$_SESSION['qr']);
    //echo $qrString;
//edie($qrString);
    $qrCode = new Endroid\QrCode\QrCode($_GET['text']);

    $qrCode->setSize($size);
    //$qrCode->setPadding(10);
    
    header('Content-Type: '.$qrCode->getContentType());//image/png
    echo $qrCode->writeString();

    //header('location:index.php');
}

?>