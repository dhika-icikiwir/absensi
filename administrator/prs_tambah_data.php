<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    $siswa = $_POST['id_siswa'];
    $jrs   = $_POST['id_jrs'];
    $kelas = $_POST['id_kelas'];
    $tgl   = $_POST['tgl_absen'];
    $waktu = $_POST['waktu_absen'];
    $ket   = $_POST['kehadiran'];
    
    mysqli_query($conn, "INSERT INTO absen (id_siswa, id_jrs, id_kelas, tgl_absen, waktu_absen, kehadiran) VALUES ('$siswa', '$jrs', '$kelas', '$tgl', '$waktu', '$ket')");
    header("location:index.php");
}
?>