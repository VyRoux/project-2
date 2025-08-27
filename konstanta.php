<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Konstanta</title>
</head>

<body>
    <h1>Menghitung Luas Lingkaran</h1>
    <?php
    // Konstanta untuk nilai judul
    define("Judul", "Hitung luas Lingkaran");

    // Konstanta untuk nilai PHI
    define("PHI",3.14);

    $r = 7;
    echo "<br> Jari-jari: $r <br>";
    $luas = PHI*$r*$r;
    echo "Luas Lingkaran = $luas";
    ?>

    <h1>Menghitung Luas Segi Tiga</h1>
    <?php
        define("Nama","Jumlah");
        define("Setengah", 0.5);
        define("tengah", 1/2);

        $alas = 12;
        $tinggi = 8;
        $luas = Setengah * $alas * $tinggi;
        
        echo "Alas = $alas cm <br>";
        echo "Tinggi = $tinggi cm <br>";
        echo "Luas = $luas cm <br>";
    ?>

    <h1>Menghitung Luas Segi Tiga ke-2</h1>
    <?php
        $alas = 6;
        $tinggi = 8;
        $luas = tengah * $alas * $tinggi;

        echo "Alas = $alas cm <br>";
        echo "Tinggi = $tinggi cm <br>";
        echo "Luasnya adalah $luas cm <br>";
    ?>

</body>

</html>