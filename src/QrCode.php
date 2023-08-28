<?php




namespace QrCode {

    use Endroid\QrCode\Builder\Builder;
    use Endroid\QrCode\Encoding\Encoding;
    use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
    use Endroid\QrCode\Writer\PngWriter;

    class QrCode
    {

        private string $qrCodeLink;
        private int $qrCodeSize;
        private int $qrCodeMargin;

        public function __construct($qrCodeLink, $qrCodeSize, $qrCodeMargin)
        {
            $this->qrCodeLink = $qrCodeLink;
            $this->qrCodeSize = $qrCodeSize;
            $this->qrCodeMargin = $qrCodeMargin;
        }

        public function QrCodeGenerate()
        {
            $result = Builder::create()
                ->writer(new PngWriter())
                ->data($this->qrCodeLink)
                ->encoding(new Encoding('UTF-8'))
                ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
                ->size($this->qrCodeSize)
                ->margin($this->qrCodeMargin)
                ->validateResult(false)
                ->build();

            $dataUri = $result->getDataUri();
            setcookie('QrCodes', $dataUri);
        }
    }
}