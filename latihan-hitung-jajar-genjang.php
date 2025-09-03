<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Jajar Ngejang</title>
</head>

<body>
    <?php
        $panjang_alas = 15;
        $sisi_miring = 10;

        define("DUA", 2);

        // rumus = K= 2(a+b)

        $keliling = DUA * ($panjang_alas + $sisi_miring);
        echo "Keliling adalah $keliling cm<sup>2</sup><br>";
    ?>
</body>

</html>