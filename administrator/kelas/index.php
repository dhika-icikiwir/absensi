<?php
include "../../koneksi.php";
$query = mysqli_query($conn, "SELECT kelas.*, user.username FROM kelas LEFT JOIN user ON kelas.id_user = user.id_user");
?>
<!DOCTYPE html>
<html>
<head><title>Data Kelas</title></head>
<body>
    <h2>Data Kelas</h2>
    <p>
        <a href="../index.php">Data Absen</a> | 
        <a href="../siswa/index.php">Data Siswa</a> | 
        <a href="../jurusan/index.php">Data Jurusan</a> | 
        <a href="../kelas/index.php">Data Kelas</a> | 
        <a href="../user/index.php">Data User</a>
    </p>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th><th>Nama Kelas</th><th>Ditambahkan Oleh</th><th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $row['id_kelas']; ?></td>
            <td><?= $row['nama_kelas']; ?></td>
            <td><?= $row['username']; ?></td>
            <td>
                <a href="edit_kelas.php?id=<?= $row['id_kelas']; ?>">Edit</a> | 
                <a href="delete_kelas.php?id=<?= $row['id_kelas']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table><br>
    <a href="tambah_kelas.php">Tambah Data Kelas</a> | 
    <a href="../../index.php">Logout</a>
</body>
</html>
