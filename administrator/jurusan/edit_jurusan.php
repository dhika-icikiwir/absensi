<?php
include "../../koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM jurusan WHERE id_jrs='$id'"));
?>
<!DOCTYPE html>
<html>
<head><title>Edit Jurusan</title></head>
<body>
    <h2>Edit Jurusan</h2>
    <form action="prs_edit_jurusan.php" method="POST">
        <input type="hidden" name="id_jrs" value="<?= $data['id_jrs']; ?>">
        Nama Jurusan: <input type="text" name="nm_jrs" value="<?= $data['nm_jrs']; ?>"><br><br>
        Ditambahkan Oleh (ID User): <input type="text" name="id_user" value="<?= $data['id_user']; ?>"><br><br>
        <button type="submit" name="update">Update</button><br><br>
        <a href="../jurusan/index.php">Kembali</a>
    </form>
</body>
</html>
