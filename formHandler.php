<?php
require_once './vendor/autoload.php';
use QrCode\QrCode;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['link']) && gettype($_POST['link']) == 'string' && isset($_POST['size']) && is_numeric($_POST['size']) && isset($_POST['margin']) && is_numeric($_POST['margin'])) {

        $qrCodeLink = $_POST['link'];
        $qrCodeSize = $_POST['size'];
        $qrCodeMargin = $_POST['margin'];
        $qrCode = new QrCode($qrCodeLink, $qrCodeSize, $qrCodeMargin);
        $generatedQrCode = $qrCode->QrCodeGenerate();
        header('location:index.php');
    }
}