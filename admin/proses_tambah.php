<?php 
session_start(); 
include "koneksi.php"; 
 
if(!isset($_SESSION['username'])) { 
header("location:login.php?pesan=logindulu"); 
exit; 
} 

$nama = $_GET['nama']; 
$harga_sewa = $_GET['harga_sewa']; 
$jenis_transmisi = $_GET['jenis_transmisi']; 
$jumlah_kursi = $_GET['jumlah_kursi'];
$gambar_mobil = $_FILES['gambar_mobil'];

move_uploaded_file($_FILES['gambar_mobil'],"../assets/img/" . $gambar_mobil);

$sql = "INSERT INTO mobil (nama,harga_sewa,jenis_transmisi,jumlah_kursi,gambar_mobil) VALUES  
('$nama','$harga_sewa','$jenis_transmisi','$jumlah_kursi','$gambar_mobil')"; 
$query = mysqli_query($koneksi, $sql); 
 
if ($query) { 
header("location:admin.php?simpan=sukses"); 
exit; 
} else { 
header("location:admin.php?simpan=gagal"); 
exit; 
}