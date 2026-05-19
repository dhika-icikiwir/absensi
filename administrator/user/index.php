<?php
include "../../koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head><title>Data User</title></head>
<body>
    <h2>Data User</h2>
    <p>
        <a href="../index.php">Data Absen</a> | 
        <a href="../siswa/index.php">Data Siswa</a> | 
        <a href="../jurusan/index.php">Data Jurusan</a> | 
        <a href="../kelas/index.php">Data Kelas</a> | 
        <a href="index.php">Data User</a>
    </p>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th><th>Username</th><th>Password</th><th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $row['id_user']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['password']; ?></td>
            <td>
                <a href="edit_user.php?id=<?= $row['id_user']; ?>">Edit</a> | 
                <a href="delete_user.php?id=<?= $row['id_user']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table><br>
    <a href="tambah_user.php">Tambah Data User</a> | 
    <a href="../../index.php">Logout</a>
</body>
</html>
