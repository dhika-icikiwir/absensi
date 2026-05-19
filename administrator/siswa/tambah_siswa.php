<?php
include "../../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Siswa</title></head>
<body>
    <h2>Tambah Siswa</h2>
    <form action="prs_tambah_siswa.php" method="POST">
        Nama: <input type="text" name="nm_siswa"><br><br>
        NIS: <input type="text" name="nis_siswa"><br><br>
        JK: <select name="jk_siswa">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select><br><br>
        Tgl Lahir: <input type="date" name="tgl_lahir"><br><br>
        Alamat: <textarea name="alamat_siswa"></textarea><br><br>
        No Telp: <input type="text" name="no_telp_siswa"><br><br>
        Ditambahkan Oleh (ID User): <input type="text" name="id_user"><br><br>
        <button type="submit" name="simpan">Simpan</button><br><br>
        <a href="../siswa/index.php">Kembali</a>
    </form>
</body>
</html>
