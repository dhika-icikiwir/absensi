<?php
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nm_siswa'];
    $nis    = $_POST['nis_siswa'];
    $jk     = $_POST['jk_siswa'];
    $tgl    = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat_siswa'];
    $telp   = $_POST['no_telp_siswa'];
    $id_user = $_POST['id_user'];

    mysqli_query($conn, "INSERT INTO siswa (nm_siswa, nis_siswa, jk_siswa, tgl_lahir, alamat_siswa, no_telp_siswa, id_user) VALUES ('$nama', '$nis', '$jk', '$tgl', '$alamat', '$telp', '$id_user')");
    header("location:index.php");
}
?>
