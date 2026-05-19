<?php
include "../../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM jurusan WHERE id_jrs='$id'";
mysqli_query($conn, $sql);
header("location:index.php");
?>
