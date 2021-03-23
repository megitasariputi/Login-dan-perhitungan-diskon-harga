<?php require_once 'functiondiskon.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="form_latihan7a.css">

    <title>Document</title>
</head>

<body>

    <div class="tengah" align="center">

        <div class="header" align="center">
            <h1>Form Diskon<h1>
        </div>

        <div class="navigationbar"></div>

        <div class="konten" align="center">

            <div class="content"></div>

            <div class="maincontent">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Jumlah Beli</label>
                        <input type="number" class="form-control" name="jmlbeli">
                    </div>
                    <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                </form>
                <br>

                <?php
                if (isset($_POST['hitung'])) {
                    $jumlahbeli = $_POST['jmlbeli'];

                    $totalharga = total($jumlahbeli);
                    $totaldiskon = diskon($totalharga, $jumlahbeli);
                    $totalbayar = bayar($totalharga, $totaldiskon);
                }
                ?>

                <p>Total Harga :
                    <?php
                    if (isset($totalharga)) {
                        echo "Rp." . number_format($totalharga, 2, ',', '.');
                    }
                    ?>
                </p>
                <p>Total Diskon :
                    <?php
                    if (isset($totaldiskon)) {
                        echo "Rp." . number_format($totaldiskon, 2, ',', '.');
                    }
                    ?>
                </p>
                <p>Total Bayar :
                    <?php
                    if (isset($totalbayar)) {
                        echo "Rp." . number_format($totalbayar, 2, ',', '-');
                    }
                    ?>
                </p>

            </div>

            <div class="content2"></div>

        </div>

        <div class="footer">BLK Bekasi</div>

    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>