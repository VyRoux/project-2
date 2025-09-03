<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Operator Logika</title>
</head>

<body>
    <?php
    $bilangan1 = 100;
    $bilangan2 = 20;
    $teks1 = "PHP";
    $teks2 = "php";

    $hasil = ($bilangan1 <> $bilangan2) or ($teks1 == $teks2);
    echo "$bilangan1 <> $bilangan2 or $teks1 == $teks2 adalah $hasil <br>";

    $hasil = !($teks1 == $teks2);
    echo "!($teks1 == $teks2) adalah $hasil";
    ?>
</body>

</html>