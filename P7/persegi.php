<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi</title>
</head>
<body>
    <h1>Persegi</h1>
<a href="index.php">Home</a>
    <form action="persegiaction.php" method="post">
        <table cellpadding="10">
            <tr>
                <td><label for="sisi">Masukan sisi</label><br></td>
                <td>:</td>
                <td><input type="number" name="sisi" id=""></td>
            </tr>
            <tr>
                <td><label for="Pilih">Pilih</label><br></td>
                <td>:</td>
                <td>
                <input type="radio" id="html" name="pilih" value="keliling" required>
                    <label for="luas">Luas</label><br>
                    <input type="radio" id="css" name="pilih" value="luas" required>
                    <label for="keliling">Keliling</label><br>
                    <input type="radio" id="javascript" name="pilih" value="semua" required>
                    <label for="Luas dan Keliling">Luas dan Keliling</label>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="hitung luas dan keliling"></td>
            </tr>
            <tr>
                <td collspan="3" align="center">
                <img src="Persegi.jpg" alt="Ilustrasi Persegi" width="200">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>