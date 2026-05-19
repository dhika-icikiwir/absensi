<?php
include "../../koneksi.php";
$query = mysqli_query($conn, "SELECT jurusan.*, user.username FROM jurusan LEFT JOIN user ON jurusan.id_user = user.id_user");
?>
<!DOCTYPE html>
<html>
<head><title>Data Jurusan</title></head>
<body>
    <h2>Data Jurusan</h2>
    <p>
        <a href="../index.php">Data Absen</a> | 
        <a href="../siswa/index.php">Data Siswa</a> | 
        <a href="../jurusan/index.php">Data Jurusan</a> | 
        <a href="../kelas/index.php">Data Kelas</a> | 
        <a href="../user/index.php">Data User</a>
    </p>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th><th>Nama Jurusan</th><th>Ditambahkan Oleh</th><th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $row['id_jrs']; ?></td>
            <td><?= $row['nm_jrs']; ?></td>
            <td><?= $row['username']; ?></td>
            <td>
                <a href="edit_jurusan.php?id=<?= $row['id_jrs']; ?>">Edit</a> | 
                <a href="delete_jurusan.php?id=<?= $row['id_jrs']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table><br>
    <a href="tambah_jurusan.php">Tambah Data Jurusan</a> | 
    <a href="../../index.php">Logout</a>
</body>
</html>
