<?php
include "../../koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM kelas WHERE id_kelas='$id'";
mysqli_query($conn, $sql);
header("location:index.php");
?>
