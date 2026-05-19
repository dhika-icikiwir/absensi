<?php
include "../../koneksi.php";

if (isset($_POST['update'])) {
    $id     = $_POST['id_siswa'];
    $nama   = $_POST['nm_siswa'];
    $nis    = $_POST['nis_siswa'];
    $jk     = $_POST['jk_siswa'];
    $tgl    = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat_siswa'];
    $telp   = $_POST['no_telp_siswa'];
    $id_user = $_POST['id_user'];

    mysqli_query($conn, "UPDATE siswa SET nm_siswa='$nama', nis_siswa='$nis', jk_siswa='$jk', tgl_lahir='$tgl', alamat_siswa='$alamat', no_telp_siswa='$telp', id_user='$id_user' WHERE id_siswa='$id'");
    header("location:index.php");
}
?>
