<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>

<body>
    <?php
        $bilangan1 = 200;
        $bilangan2 = 40;
        $teks1 = "PHP";
        $teks2 = "php";

        $hasil = $bilangan1 > $bilangan2;
        echo "Hasil dari $bilangan1 > $bilangan2 = $hasil <br>";

        $hasil = $bilangan1 < $bilangan2;
        echo "Hasil dari $bilangan1 < $bilangan2 = $hasil <br>";

        $hasil = $bilangan1 == $bilangan2;
        echo "Hasil dari $bilangan1 == $bilangan2 = $hasil <br>";

        $hasil = $bilangan1 != $bilangan2;
        echo "Hasil dari $bilangan1 != $bilangan2 = $hasil <br>";

        $hasil = $bilangan1 >= $bilangan2;
        echo "Hasil dari $bilangan1 >= $bilangan2 = $hasil <br>";

        $hasil = $bilangan1 <= $bilangan2;
        echo "Hasil dari $bilangan1 <
         
         
         
         = $bilangan2 = $hasil <br>";

        $hasil = $teks1 == $teks2;
        echo "Hasil dari $teks1 == $teks2 = $hasil <br>";

        $hasil = $teks1 != $teks2;
        echo "Hasil dari $teks1 != $teks2 = $hasil <br>";
        
    ?>
</body>

</html>