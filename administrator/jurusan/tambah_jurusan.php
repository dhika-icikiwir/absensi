<?php
include "../../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Jurusan</title></head>
<body>
    <h2>Tambah Jurusan</h2>
    <form action="prs_tambah_jurusan.php" method="POST">
        Nama Jurusan: <input type="text" name="nm_jrs"><br><br>
        Ditambahkan Oleh (ID User): <input type="text" name="id_user"><br><br>
        <button type="submit" name="simpan">Simpan</button><br><br>
        <a href="../jurusan/index.php">Kembali</a>
    </form>
</body>
</html>
