<?php
include "../../koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM kelas WHERE id_kelas='$id'"));
?>
<!DOCTYPE html>
<html>
<head><title>Edit Kelas</title></head>
<body>
    <h2>Edit Kelas</h2>
    <form action="prs_edit_kelas.php" method="POST">
        <input type="hidden" name="id_kelas" value="<?= $data['id_kelas']; ?>">
        Nama Kelas: <input type="text" name="nama_kelas" value="<?= $data['nama_kelas']; ?>"><br><br>
Ditambahkan Oleh (ID User): <input type="text" name="id_user" value="<?= $data['id_user']; ?>"><br><br>
        <button type="submit" name="update">Update</button><br><br>
        <a href="../kelas/index.php">Kembali</a>
    </form>
</body>
</html>
