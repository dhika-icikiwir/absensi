<?php
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_kelas'];
    $id_user = $_POST['id_user'];

    mysqli_query($conn, "INSERT INTO kelas (nama_kelas, id_user) VALUES ('$nama', '$id_user')");
    header("location:index.php");
}
?>
