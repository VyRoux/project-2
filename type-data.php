<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Type Data</title>
</head>

<body>
    <?php
    $barang = "Kemeja";
    $jumlah = 5;
    $harga = 20000;
    $total = $harga * $jumlah;
    $diskon = $total * 0.1;
    $bayar = $total - $diskon;

    echo "Barang = $barang <br>";
    echo "Jumlah = $jumlah <br>";
    echo "harga = $harga <br>";
    echo "diskon = $diskon <br>";
    echo "total = $total <br>";
    echo "Yang dibayar adalah $bayar";
    ?>
</body>

</html>