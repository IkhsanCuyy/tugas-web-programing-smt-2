<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <h1>Belah ketupat</h1>
    <a href="index.php">Home</a>
    <form action="belahketupataction.php" method="post">
        <div style="margin-top: 20px;">
            <div style="display: inline-block; margin-right: 20px;">
                <label for="sisi">Masukan sisi</label><br>
    <input type="number" name="sisi" id="sisi">
        <div style="margin-top: 20px;">
            <div style="display: inline-block; margin-right: 20px;">
                <label for="d1">Masukan Diagonal 1</label><br>
    <input type="number" name="diagonal1" id="diagonal1" required>
        <div style="margin-top: 20px;">
            <div style="display: inline-block; margin-right: 20px;">
                <label for="d2">Masukan Diagonal 2</label><br>
    <input type="number" name="diagonal2" id="diagonal2" required>
    <div style="margin-top: 20px;">
    <input type="submit" value="Hitung luas dan keliling" required>
        <div style="margin-top: 20px;">
            <img src="Belah ketupat.jpg" alt="Ilustrasi belah ketupat" width="300">
    </form>
</body>
</html>