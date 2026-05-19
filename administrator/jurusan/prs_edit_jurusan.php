<?php
include "../../koneksi.php";

if (isset($_POST['update'])) {
    $id = $_POST['id_jrs'];
    $nama = $_POST['nm_jrs'];
    $id_user = $_POST['id_user'];

    mysqli_query($conn, "UPDATE jurusan SET nm_jrs='$nama', id_user='$id_user' WHERE id_jrs='$id'");
    header("location:index.php");
}
?>
