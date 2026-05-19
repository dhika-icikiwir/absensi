<?php
include "../../koneksi.php";
$id = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($conn, "UPDATE user SET username='$username', password='$password' WHERE id_user='$id'");
header("location:index.php");
?>
