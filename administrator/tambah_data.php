<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Absen</title>
</head>
<body>
    <h2>Tambah Data Absen</h2>
    <form action="prs_tambah_data.php" method="POST">
        Siswa ID: <input type="number" name="id_siswa"><br><br>
        Jurusan ID: <input type="number" name="id_jrs"><br><br>
        Kelas ID: <input type="number" name="id_kelas"><br><br>
        Tanggal: <input type="date" name="tgl_absen"><br><br>
        Waktu: <input type="time" name="waktu_absen"><br><br>
        Kehadiran: 
        <select name="kehadiran">
            <option value="hadir">Hadir</option>
            <option value="sakit">Sakit</option>
            <option value="izin">Izin</option>
            <option value="alpa">Alpa</option>
        </select><br><br>
        <button type="submit" name="simpan">Simpan</button><br><br>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>