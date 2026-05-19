<?php
include "../koneksi.php";

if (isset($_POST['proses'])) {
    $siswa = $_POST['id_siswa'];
    $jrs   = $_POST['id_jrs'];
    $kelas = $_POST['id_kelas'];
    $tgl   = $_POST['tgl_absen'];
    $ket   = $_POST['kehadiran'];

    $sql = "INSERT INTO absen (id_siswa, id_jrs, id_kelas, tgl_absen, kehadiran) VALUES ('$siswa', '$jrs', '$kelas', '$tgl', '$ket')";
    
    mysqli_query($conn, $sql);
    header("location:index.php");
}
?>
