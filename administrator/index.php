<?php
include "../koneksi.php";
// 1. Statistik (COUNT & SUM)
$sql_stat = "SELECT 
    COUNT(*) as total, 
    SUM(kehadiran='hadir') as h,
    SUM(kehadiran='sakit') as s,
    SUM(kehadiran='izin') as i,
    SUM(kehadiran='alpa') as a
    FROM absen";
$stat = mysqli_fetch_assoc(mysqli_query($conn, $sql_stat));

// 2. Data Tabel (JOIN)
$query = mysqli_query($conn, "SELECT a.id_absen, s.nm_siswa, j.nm_jrs, k.nama_kelas, a.tgl_absen,a.waktu_absen, a.kehadiran 
    FROM absen a 
    JOIN siswa s ON a.id_siswa = s.id_siswa 
    JOIN jurusan j ON a.id_jrs = j.id_jrs
    JOIN kelas k ON a.id_kelas = k.id_kelas");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator Dashboard</title>
</head>
<body>
    <h2>Menu Administrator</h2>
    <p>
        <a href="index.php">Data Absen</a> | 
        <a href="siswa/index.php">Data Siswa</a> | 
        <a href="jurusan/index.php">Data Jurusan</a> | 
        <a href="kelas/index.php">Data Kelas</a> | 
        <a href="user/index.php">Data User</a>
    </p>
    <hr>
    <h3>Data Absensi</h3>

    <!-- Tampilan Statistik -->
    <p>
        Total Data: <?= $stat['total']; ?> | 
        Hadir: <?= $stat['h']; ?> | 
        Sakit: <?= $stat['s']; ?> | 
        Izin:  <?= $stat['i']; ?> | 
        Alpa:  <?= $stat['a']; ?>
    </p>

    <!-- Tabel Data -->
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tanggal</th>
            <th>waktu</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <tr>
            <td><?= $row['nm_siswa']; ?></td>
            <td><?= $row['nama_kelas']; ?></td>
            <td><?= $row['nm_jrs']; ?></td>
            <td><?= $row['tgl_absen']; ?></td>
            <td><?= $row['waktu_absen']; ?></td>
            <td><?= $row['kehadiran']; ?></td>
            <td>
                <a href="edit_data.php?id=<?= $row['id_absen']; ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id_absen']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="tambah_data.php">Tambah Data Absen</a> | 
    <a href="../index.php">Logout</a>
</body>
</html>
