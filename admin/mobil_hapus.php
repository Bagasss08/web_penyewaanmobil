<?php
include("koneksi.php");
$id_mobil = $_GET['id_mobil'];
mysqli_query($koneksi, "DELETE FROM mobil WHERE id_mobil = $id_mobil");
header("Location: admin.php");
exit;
?>