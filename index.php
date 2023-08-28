<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic QrCode Generator For PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <class="row">
            <div class="text-center">QR CODE GENERATOR</div><br><br>
            <form action="formHandler.php" method="POST" class="form-control">
                QrCode Link: <input type="text" name="link" class="form-control"><br>
                QrCode Size: <input type="number" name="size" class="form-control"><br>
                QrCode Margin: <input type="number" name="margin" class="form-control"><br>
                <input type="submit" class="form-control" value="Create QrCode">
            </form>

            <?php
            if (isset($_COOKIE['QrCodes'])) {
                ?>

                <div class="text-center">Created Qr Code</div>
                <div class="text-center">
                    <img src="<?php echo $_COOKIE['QrCodes']; ?> " />
                </div>
                <?php
            }
            ?>

    </div>
    </div>
</body>

</html>