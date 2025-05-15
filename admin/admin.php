<?php
include "koneksi.php";

$sql = "SELECT * FROM penyewaan"; 
$query = mysqli_query($koneksi,$sql);

$aaa = "SELECT * FROM mobil"; 
$bbb = mysqli_query($koneksi,$aaa);

$zzz = "SELECT * FROM pembayaran"; 
$qqq = mysqli_query($koneksi,$zzz);

$ppp = "SELECT * FROM pengembalian"; 
$vvv = mysqli_query($koneksi,$ppp);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1> History Penyewaan</h1>

    <!-- tabel penyewaan -->

    <div class="table-container">
<table class="table"> 
    <tr> 
    <th>No</th> 
    <th>id_pelanggan</th> 
    <th>id_mobil</th> 
    <th>tanggal_sewa</th> 
    <th>tanggal_kembali</th>
    <th>total_harga</th> 
    <th>Aksi</th>
    </tr> 

<?php while($penyewaan = mysqli_fetch_assoc($query)) {?>
    <td><?= $penyewaan['id_penyewaan'] ?></td> 
    <td><?= $penyewaan['id_pelanggan'] ?></td> 
    <td><?= $penyewaan['id_mobil'] ?></td> 
    <td><?= $penyewaan['tanggal_sewa'] ?></td>
    <td><?= $penyewaan['tanggal_kembali'] ?></td>
    <td><?= $penyewaan['total_harga'] ?></td>   
    <td> 
        <a href="edit.php?id_penyewaan=<?= $penyewaan['id_penyewaan'] ?>">Edit</a> 
        <a href="hapus.php?id_penyewaan=<?= $penyewaan['id_penyewaan'] ?>">Hapus</a> 
    </td>  
<?php } ?>
</table>
</div> <br> <br>

<!-- tabel mobil -->

<h1> Mobil</h1>

<a href="tambah.php">Tambah mobil</a><br><br>

<div class="table-container">
<table>
<tr> 
    <th>id_mobil</th> 
    <th>nama</th> 
    <th>harga_sewa</th> 
    <th>jenis_transmisi</th> 
    <th>jumlah_kursi</th>
    <th>gambar_mobil</th> 
    <th>Aksi</th>
    </tr> 

    <?php while($mobil = mysqli_fetch_assoc($bbb)) { ?>
<tr>
    <td><?= $mobil['id_mobil'] ?></td> 
    <td><?= $mobil['nama'] ?></td> 
    <td><?= $mobil['harga_sewa'] ?></td> 
    <td><?= $mobil['jenis_transmisi'] ?></td>
    <td><?= $mobil['jumlah_kursi'] ?></td>
    <td><img src="assets/img/<?= $mobil['gambar_mobil'] ?>" alt="mobil" width="50"></td>   
    <td> 
        <a href="edit.php?id_mobil=<?= $mobil['id_mobil'] ?>">Edit</a> 
        <a href="mobil_hapus.php?id_mobil=<?= $mobil['id_mobil'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a> 
    </td>  
</tr>
<?php } ?>


</table>
</div> <br> <br>

    <!-- tabel Pembayaran -->
<!-- 
    <div class="table-container">
<table>
<tr> 
    <th>id_pembayaran</th> 
    <th>id_penyewaan</th> 
    <th>jumlah</th> 
    <th>metode</th> 
    <th>tanggal_bayar</th>
    <th>Aksi</th>
    </tr> 

    <?php while($pembayaran = mysqli_fetch_assoc($qqq)) {?>
    <td><?= $pembayaran ['id_pembayaran'] ?></td> 
    <td><?= $pembayaran['id_penyewaan'] ?></td> 
    <td><?= $pembayaran['jumlah'] ?></td> 
    <td><?= $pembayaran['metode'] ?></td>
    <td><?= $pembayaran['tanggal_bayar'] ?></td> 
    <td> 
        <a href="edit.php?id_pembayaran=<?= $pembayaran['id_pembayaran'] ?>">Edit</a> 
        <a href="hapus.php?id_pembayaran=<?= $pembayaran['id_pembayaran'] ?>">Hapus</a> 
    </td>  
<?php } ?>

</table> -->
</div> <br> <br>

        <!-- tabel pengembalian -->

        <!-- <div class="table-container">
<table>
<tr> 
    <th>id_pengembalian</th> 
    <th>id_penyewaan</th> 
    <th>tanggal_pengembalian</th> 
    <th>kondisi</th> 
    <th>denda</th>
    <th>Aksi</th>
    </tr> 

    <?php while($pengembalian = mysqli_fetch_assoc($vvv)) {?>
    <td><?= $pengembalian ['id_pengembalian'] ?></td> 
    <td><?= $pengembalian['id_penyewaan'] ?></td> 
    <td><?= $pengembalian['tanggal_pengembalian'] ?></td> 
    <td><?= $pengembalian['kondisi'] ?></td>
    <td><?= $pengembalian['denda'] ?></td> 
    <td> 
        <a href="edit.php?id_pengembalian=<?= $pengembalian['id_pengembalian'] ?>">Edit</a> 
        <a href="hapus.php?id_pengembalian=<?= $pengembalian['id_pengembalian'] ?>">Hapus</a> 
    </td>  
<?php } ?>

</table> -->
</div> <br> <br>

</body>
</html>