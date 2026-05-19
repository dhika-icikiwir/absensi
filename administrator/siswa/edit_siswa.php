<?php
include "../../koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id_siswa='$id'"));
?>
<!DOCTYPE html>
<html>
<head><title>Edit Siswa</title></head>
<body>
    <h2>Edit Siswa</h2>
    <form action="prs_edit_siswa.php" method="POST">
        <input type="hidden" name="id_siswa" value="<?= $data['id_siswa']; ?>">
        Nama: <input type="text" name="nm_siswa" value="<?= $data['nm_siswa']; ?>" required><br><br>
        NIS: <input type="text" name="nis_siswa" value="<?= $data['nis_siswa']; ?>" required><br><br>
        JK: <select name="jk_siswa">
            <option value="laki-laki" <?= $data['jk_siswa']; ?>>Laki-laki</option>
            <option value="perempuan" <?= $data['jk_siswa']; ?>>Perempuan</option>
        </select><br><br>
        Tgl Lahir: <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir']; ?>" required><br><br>
        Alamat: <textarea name="alamat_siswa" required><?= $data['alamat_siswa']; ?></textarea><br><br>
        No Telp: <input type="text" name="no_telp_siswa" value="<?= $data['no_telp_siswa']; ?>" required><br><br>
        Ditambahkan Oleh (ID User): <input type="text" name="id_user" value="<?= $data['id_user']; ?>" required><br><br>
        <button type="submit" name="update">Update</button><br><br>
        <a href="../siswa/index.php">Kembali</a>
    </form>
</body>
</html>
