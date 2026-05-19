<?php
include "../koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM absen WHERE id_absen='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Absen</title>
</head>
<body>
    <h2>Edit Data Absen</h2>
    <form action="prs_edit_data.php" method="POST">
        <input type="hidden" name="id_absen" value="<?= $data['id_absen']; ?>">
        
        Siswa ID: <input type="number" name="id_siswa" value="<?= $data['id_siswa']; ?>"><br><br>
        Jurusan ID: <input type="number" name="id_jrs" value="<?= $data['id_jrs']; ?>"><br><br>
        Kelas ID: <input type="number" name="id_kelas" value="<?= $data['id_kelas']; ?>"><br><br>
        Tanggal: <input type="date" name="tgl_absen" value="<?= $data['tgl_absen']; ?>"><br><br>
        Waktu: <input type="time" name="waktu_absen" value="<?= $data['waktu_absen']?>"><br><br>
        
        Status Kehadiran:
        <select name="kehadiran">
            <option value="hadir" <?= $data['kehadiran'] == 'hadir'?>>Hadir</option>
            <option value="sakit" <?= $data['kehadiran'] == 'sakit'?>>Sakit</option>
            <option value="izin" <?= $data['kehadiran'] == 'izin'?>>Izin</option>
            <option value="alpa" <?= $data['kehadiran'] == 'alpa'?>>Alpa</option>
        </select><br><br>
        <button type="submit" name="update">Update</button><br><br>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>