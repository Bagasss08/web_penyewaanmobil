<?php
include "koneksi1.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Mobil</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Navbar/Header -->
    <header class="navbar">
    <div class="nav-left">
      <a href="dasboard.php">Home</a>
    </div>
    <div class="nav-right">
      <a href="booking.php">BOOKINGS</a>
      <a href="register.php">DAFTAR</a>
      <div class="user-btn">
        <span>Bagas</span>
        <span class="user-icon">👤</span>
      </div>
    </div>
  </header>

  <!-- Blue Background Strip -->
  <div class="blue-strip">
    <div class="center-box">
      <strong>Car Rental Without Driver</strong>
    </div>
  </div>
  
  <div class="car-card img">
    <?php
    $query = "SELECT * FROM mobil ";
    $result = mysqli_query($koneksi, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      echo '<img src="assets/img/' . $row['gambar_mobil'] . '"alt=mobil">';
      echo '<h3>' . $row['nama'] . '</h3>';
      echo '<h3>' . $row['harga_sewa'] . '</h3>';
      echo '<h3>' . $row['jenis_transmisi'] . '</h3>';
      echo '<h3>' . $row['jumlah_kursi'] . '</h3>';  
    }
    ?>
  </div>

    <!-- <div class="car-list">

        Mobil 1
        <div class="car-card">
          <img src="innova.png" alt="Toyota Innova" />
          <div class="car-info">
            <h2>Toyota Kijang Innova</h2>
            <p><i class="fas fa-cogs"></i> Automatic &nbsp;&nbsp; <i class="fas fa-chair"></i> 6 Seats</p>
          </div>
          <div class="car-price">
            <p class="price">Rp. 500.000/Hari</p>
            <button>Continue</button>
          </div>
        </div>
    
        Mobil 2
        <div class="car-card">
          <img src="avanza.png" alt="Toyota Avanza" />
          <div class="car-info">
            <h2>Toyota Avanza</h2>
            <p><i class="fas fa-cogs"></i> Automatic &nbsp;&nbsp; <i class="fas fa-chair"></i> 6 Seats</p>
          </div>
          <div class="car-price">
            <p class="price">Rp. 350.000/Hari</p>
            <button>Continue</button>
          </div>
        </div>
    
        Mobil 3
        <div class="car-card">
          <img src="sigra.png" alt="Daihatsu Sigra" />
          <div class="car-info">
            <h2>Daihatsu Sigra</h2>
            <p><i class="fas fa-cogs"></i> Manual &nbsp;&nbsp; <i class="fas fa-chair"></i> 6 Seats</p>
          </div>
          <div class="car-price">
            <p class="price">Rp. 250.000/Hari</p>
            <button>Continue</button>
          </div>
        </div>
    
      </div> -->
    
      <footer class="footer">
        <div class="footer-content">
          <!-- Sosial Media -->
          <div class="footer-section">
            <h4>Follow us on</h4>
            <ul>
              <li><i class="fab fa-instagram"></i> Instagram</li>
              <li><i class="fab fa-facebook"></i> Facebook</li>
              <li><i class="fab fa-tiktok"></i> Tiktok</li>
            </ul>
          </div>
      
          <!-- Produk -->
          <div class="footer-section">
            <h4>Product</h4>
            <ul>
              <li>Pembayaran Keseluruhan</li>
              <li>Dashboard</li>
              <li>Kategori</li>
            </ul>
            <div class="app-links">
              <img src="gooplay.png" alt="Google Play" />
              <img src="appstore.png" alt="App Store" />
            </div>
          </div>
      
          <!-- Kontak -->
          <div class="footer-section">
            <h4>Contact</h4>
            <ul>
              <li><i class="fas fa-map-marker-alt"></i> Purbalingga</li>
              <li><i class="fab fa-whatsapp"></i> +62 123-4567-890</li>
              <li><i class="fas fa-envelope"></i> sewamobil@gmail.com</li>
            </ul>
          </div>
        </div>
      
        <div class="footer-bottom">
          <p>Copyright © 2025 Bagas-Yasykur</p>
        </div>
      </footer>
      
</body>
</html>