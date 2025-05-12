<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <?php
    $alas=13;
    $tinggi=5;
    $luas=$alas*$tinggi;
    $sisimiring=7;
    $keliling=2*($alas+$sisimiring);
    ?>
    <h1>Jajar Genjang</h1>
    <a href="index.php">Home</a>
    <h4>Luas = alas x tinggi = <?php echo $luas;?></h4>
    <h4>keliling = 2 x (alas + sisi miring) = <?php echo $keliling;?></h4>
    <div style="margin-top: 20px;">
        <img src="Jajar genjang.jpg" alt="Ilustrasi Jajar genjang" width="300">
</body>
</html>