<?php
include "../../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Kelas</title></head>
<body>
    <h2>Tambah Kelas</h2>
    <form action="prs_tambah_kelas.php" method="POST">
        Nama Kelas: <input type="text" name="nama_kelas"><br><br>
        Ditambahkan Oleh (ID User): <input type="text" name="id_user"><br><br>
        <button type="submit" name="simpan">Simpan</button><br><br>
        <a href="../kelas/index.php">Kembali</a>
    </form>
</body>
</html>
