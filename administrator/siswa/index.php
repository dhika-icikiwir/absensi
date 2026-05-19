<?php
include "../../koneksi.php";
$query = mysqli_query($conn, "SELECT siswa.*, user.username FROM siswa LEFT JOIN user ON siswa.id_user = user.id_user");
?>
<!DOCTYPE html>
<html>
<head><title>Data Siswa</title></head>
<body>
    <h2>Data Siswa</h2>
    <p>
        <a href="../index.php">Data Absen</a> | 
        <a href="../siswa/index.php">Data Siswa</a> | 
        <a href="../jurusan/index.php">Data Jurusan</a> | 
        <a href="../kelas/index.php">Data Kelas</a> | 
        <a href="../user/index.php">Data User</a>
    </p>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th><th>Nama Siswa</th><th>NIS</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Alamat</th><th>Nomor Telepon</th><th>Ditambahkan Oleh</th><th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $row['id_siswa']; ?></td>
            <td><?= $row['nm_siswa']; ?></td>
            <td><?= $row['nis_siswa']; ?></td>
            <td><?= $row['jk_siswa']; ?></td>
            <td><?= $row['tgl_lahir']; ?></td>
            <td><?= $row['alamat_siswa']; ?></td>
            <td><?= $row['no_telp_siswa']; ?></td>
            <td><?= $row['username']; ?></td>
            <td>
                <a href="edit_siswa.php?id=<?= $row['id_siswa']; ?>">Edit</a> | 
                <a href="delete_siswa.php?id=<?= $row['id_siswa']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table><br>
    <a href="tambah_siswa.php">Tambah Data Siswa</a> | 
    <a href="../../index.php">Logout</a>
</body>
</html>
