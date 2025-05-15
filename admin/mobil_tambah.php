<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $merk = $_POST['merk'];
    $harga_sewa = $_POST['harga_sewa'];
    $status = $_POST['status'];

    $query = "INSERT INTO mobil (merk,harga_sewa,status) VALUES  
    ('$merk','$harga_sewa','$status')"; 
    $query = mysqli_query($koneksi, $query);
    header("Location:booking.php");
    exit;
}
?>

<h2>Tambah veneu</h2>
<h2></h2>
<form action="" method="post">
    Merk: <input type="text" name="merk"> <br>
    Harga_sewa: <input type="number" name="harga_sewa"> <br>
    Status:
    <select name="status" id="">
        <option value="Manual">Manual</option>
        <option value="Automatic">Automatic</option>
    </select>
</form>
