<?php
include "../../koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id'");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data User</title></head>
<body>
    <h2>Edit Data User</h2>
    <form action="prs_edit_user.php" method="POST">
        <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>">
        <label>Username :</label><br>
        <input type="text" name="username" value="<?= $data['username']; ?>"><br><br>
        <label>Password :</label><br>
        <input type="text" name="password" value="<?= $data['password']; ?>"><br><br>
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
