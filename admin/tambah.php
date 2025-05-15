<?php 
session_start(); 
include "koneksi.php"; 

if(!isset($_SESSION['username'])) { 
    header("location:login.php?pesan=logindulu"); 
    exit; 
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama']; 
    $harga_sewa = $_POST['harga_sewa']; 
    $jenis_transmisi = $_POST['jenis_transmisi']; 
    $jumlah_kursi = $_POST['jumlah_kursi'];
    // $status = $_POST['status']; // Menambahkan status
    $gambar_mobil = $_FILES['gambar_mobil']['name'];

    // Memindahkan file gambar ke direktori yang ditentukan
    move_uploaded_file($_FILES['gambar_mobil']['tmp_name'], "../assets/img/" . $gambar_mobil);

    // Menyusun query untuk memasukkan data
    $query = "INSERT INTO mobil (nama, harga_sewa, jenis_transmisi, jumlah_kursi, gambar_mobil) 
              VALUES ('$nama', '$harga_sewa', '$jenis_transmisi', '$jumlah_kursi', '$gambar_mobil')";

    // Menjalankan query dan memeriksa kesalahan
    if (mysqli_query($koneksi, $query)) {
        header("Location:admin.php"); // Ganti dengan halaman yang sesuai
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tambah Mobil</title> 
</head> 
<body> 
<h1>Tambah</h1> 

<form action="" method="post" enctype="multipart/form-data"> 
    Nama: <input type="text" name="nama" id="" required><br> 
    Harga Sewa: <input type="number" name="harga_sewa" id="" required><br> 

    jenis transmisi : 
    <select name="jenis_transmisi" id="" required>
        <option value="Automatic">Automatic</option>
        <option value="Manual">Manual</option>
    </select> <br>

    Jumlah Kursi: <input type="number" name="jumlah_kursi" id="" required><br> 

    <label for="">Gambar Mobil</label><br> 
    <input type="file" name="gambar_mobil" id="" required><br> 

    <input type="submit" value="Simpan"> 
</form> 
</body> 
</html>
