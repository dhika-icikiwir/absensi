<?php
include "../koneksi.php";
$query = mysqli_query($conn, "SELECT a.id_absen, s.nm_siswa, j.nm_jrs, k.nama_kelas, a.tgl_absen, a.kehadiran 
    FROM absen a 
    JOIN siswa s ON a.id_siswa = s.id_siswa 
    JOIN jurusan j ON a.id_jrs = j.id_jrs
    JOIN kelas k ON a.id_kelas = k.id_kelas");
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard Guru</title></head>
<body>
    <h2>Menu Guru</h2>
    <hr>
    <h3>Data Absensi</h3>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $row['nm_siswa']; ?></td>
            <td><?= $row['nama_kelas']; ?></td>
            <td><?= $row['nm_jrs']; ?></td>
            <td><?= $row['tgl_absen']; ?></td>
            <td><?= $row['kehadiran']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="tambah_data.php">Tambah Data Absen</a> | 
    <a href="../index.php">Logout</a>
</body>
</html>
