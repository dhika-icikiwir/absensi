<?php include "../../koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Tambah Data User</title></head>
<body>
    <h2>Tambah Data User</h2>
    <form action="prs_tambah_user.php" method="POST">
        <label>Username :</label><br>
        <input type="text" name="username"><br><br>
        <label>Password :</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
