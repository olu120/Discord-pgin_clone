<?php
require_once 'vendor/autoload.php'; // Include the Composer autoloader

use Endroid\QrCode\QrCode;

function generateQRCode($data, $filename)
{
    $qrCode = new QrCode($data);
    $qrCode->writeFile($filename);
}

// Example usage
$data = "https://example.com/qr-login"; // Replace with your login URL
$filename = "qr-login.png"; // Specify the desired file name and extension

generateQRCode($data, $filename);