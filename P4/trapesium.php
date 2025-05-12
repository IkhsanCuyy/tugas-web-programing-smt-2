<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
    $sisi_1=10;
    $sisi_2=10;
    $tinggi=5;
    $alas_1=10;
    $alas_2=10;
    $luas=1/2*($alas_1+$alas_2)*$tinggi;
    $keliling=$alas_1+$alas_2+$sisi_1+$sisi_2;
    ?>

    <h1>Trapesium</h1>
    <a href="index.php">Home</a>

    <h4>Luas  ½ x (a + b) x tinggi
    (a dan b = sisi sejajar) = <?php echo $luas;?></h4>
    <h4>keliling = jumlah semua sisi = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
        <img src="Trapesium.jpg" alt="Ilustrasi Trapesium" width="300">
</body>
</html>