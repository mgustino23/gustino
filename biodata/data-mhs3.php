<!DOCTYPE html>
<html>
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$data = "$nama\n$email\n$komentar\n";
file_put_contents('bukutamu.dat', $data, FILE_APPEND);

// You can add code here to upload the file to a GitHub repository
?>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    <form action="save_to_file.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
