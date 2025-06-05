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
  <table cellpadding="5">
  <tr>
            <td><label for="sisi">Sisi</label><br></td>
            <td><input type="number" name="sisi" id="sisi" required></td>
        </tr>
        <tr>
            <td><label for="d1">Diagonal 1 (d1)</label><br></td>
            <td><input type="number" name="d1" id="d1" required></td>
        </tr>
        <tr>
            <td><label for="d2">Diagonal 2 (d2)</label><br></td>
            <td><input type="number" name="d2" id="d2" required></td>
        </tr>
        <tr>
            <td><label for="pilih">Pilih</label><br></td>
            <td>
                <input type="radio" id="keliling" name="pilih" value="keliling" required>
                <label for="keliling">Keliling</label><br>

                <input type="radio" id="luas" name="pilih" value="luas" required>
                <label for="luas">Luas</label><br>

                <input type="radio" id="semua" name="pilih" value="semua" required>
                <label for="semua">Luas dan Keliling</label>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Hitung</button></td>
        </tr>
    <tr>
      <td colspan="3" align="center">
        <img src="Belah ketupat.jpg" alt="Ilustrasi belah ketupat" width="300">
      </td>
    </tr>
  </table>
</form>

</body>
</html>