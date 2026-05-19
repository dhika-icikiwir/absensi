<?php
include "../../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE id_siswa='$id'";
mysqli_query($conn, $sql);
header("location:index.php");
?>
