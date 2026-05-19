<?php
include "../koneksi.php";

if (isset($_POST['update'])) {
    $id    = $_POST['id_absen'];
    $siswa = $_POST['id_siswa'];
    $jrs   = $_POST['id_jrs'];
    $kelas = $_POST['id_kelas'];
    $tgl   = $_POST['tgl_absen'];
    $waktu   = $_POST['waktu_absen'];
    $ket   = $_POST['kehadiran'];

    mysqli_query($conn, "UPDATE absen SET id_siswa='$siswa', id_jrs='$jrs', id_kelas='$kelas', tgl_absen='$tgl', waktu_absen = '$waktu', kehadiran='$ket' WHERE id_absen='$id'");
    header("location:index.php");
}
?>
