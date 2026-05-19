<?php
include "../../koneksi.php";

if (isset($_POST['update'])) {
    $id = $_POST['id_kelas'];
    $nama = $_POST['nama_kelas'];
    $id_user = $_POST['id_user'];

    mysqli_query($conn, "UPDATE kelas SET nama_kelas='$nama', id_user='$id_user' WHERE id_kelas='$id'");
    header("location:index.php");
}
?>
