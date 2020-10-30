<?php
// Bestand met functions inladen, deze regel laten staan aub
// require './includes/functions.php';

// Laad de composer autoloader in
require '/      vendor/autoload.php';
// Lees de documentatie van de bacon/bacon-qr-code package
// Zo kom je te weten hoe je deze package kunt gebruiken
// https://github.com/Bacon/BaconQrCode

// Maak een QR code met als inhoud een leuke URL
use CodeItNow\BarcodeBundle\Utils\QrCode;

$qrCode = new QrCode();
$qrCode
    ->setText('https//:firassoekhai.com')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Broodje Ekmek')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
$qrcode->save('qrcode.png');
// Tip: Gebruik de SvgImageBackEnd()

// Sla de QR code op als afbeelding: "qrcode.svg"