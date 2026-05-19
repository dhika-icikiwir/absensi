<?php
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nm_jrs'];
    $id_user = $_POST['id_user'];

    mysqli_query($conn, "INSERT INTO jurusan (nm_jrs, id_user) VALUES ('$nama', '$id_user')");
    header("location:index.php");
}
?>
