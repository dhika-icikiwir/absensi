<?php
include "../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM absen WHERE id_absen='$id'";
mysqli_query($conn, $sql);
header("location:index.php");
?>
