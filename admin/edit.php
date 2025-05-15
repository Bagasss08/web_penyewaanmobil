<?php 
session_start(); 
include "koneksi.php"; 
if(!isset($_SESSION['username'])) { 
header("location:login.php?pesan=logindulu"); 
exit; 
} 

$id_mobil = $_GET['id_mobil']; 
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mobil WHERE id_mobil = $id_mobil"));
// $sql = "SELECT * FROM mobil WHERE id_mobil = '$id_mobil' "; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama']; 
    $harga_sewa = $_POST['harga_sewa']; 
    $jenis_transmisi = $_POST['jenis_transmisi']; 
    $jumlah_kursi = $_POST['jumlah_kursi'];
    // $status = $_POST['status']; // Menambahkan status
    // $gambar_mobil = $_FILES['gambar_mobil']['name'];

$query = "UPDATE mobil SET 
            nama='$nama',
            harga_sewa='$harga_sewa',
            jenis_transmisi='$jenis_transmisi',
            jumlah_kursi='$jumlah_kursi'
            -- gambar_mobil = '$gambar_mobil' 
            WHERE id_mobil=$id_mobil";
mysqli_query($koneksi, $query); 
header("Location: admin.php");
exit;
}
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body> 
<h1>Edit</h1> 

<form method="post"> 
    Nama: <input type="text" name="nama" id="" required><br> 
    Harga Sewa: <input type="number" name="harga_sewa" id="" required><br> 

    jenis transmisi : 
    <select name="jenis_transmisi" id="" required>
        <option value="Automatic" <?= $data['jenis_transmisi'] == 'Automatic' ? 'selected' : '' ?>>Automatic</option>
        <option value="Manual" <?= $data['jenis_transmisi'] == 'Manual' ? 'selected' : '' ?>>Manual</option>
    </select> <br>

    Jumlah Kursi: <input type="number" name="jumlah_kursi" id="" required><br> 

    <!-- <label for="">Gambar Mobil</label><br> 
    <input type="file" name="gambar_mobil" id="" required><br>  -->

    <input type="submit" value="Simpan"> 
</form> 
</body> 
</html> 
 