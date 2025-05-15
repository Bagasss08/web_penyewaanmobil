<?php 

include "koneksi.php"; 
 
 
$id = $_GET['id_mobil']; 
$nama = $_GET['nama']; 
$harga_sewa = $_GET['harga_sewa']; 
$jenis_transmisi = $_GET['jenis_transmisi']; 
$jumlah_kursi = $_GET['jumlah_kursi']; 
$gambar_mobil = $_GET['gambar_mobil']; 

$sql = "UPDATE novel SET nama = '$nama',  
harga_sewa = '$harga_sewa',  
jenis_transmisi = '$jenis_transmisi',
jumlah_kursi = '$jumlah_kursi',
gambar_mobil = '$gambar_mobil'  
WHERE no = '$id' "; 
$query = mysqli_query($koneksi,$sql); 
 
if ($query) { 
header("location:admin.php?edit=sukses"); 
exit; 
} else { 
header("location:admin.php?edit=gagal"); 
exit; 
}