<?php
include "koneksi1.php";

?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dasboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        ul {
            list-style-type: none;
        }
    </style>
    
</head>
    <title>Sewa Mobil</title>
</head>
<body>
    <!-- <header>
        <nav>
            <ul>
                <li><a href="booking.html">BOOKINGS</a></li>
                <li><a href="register.php">DAFTAR</a></li>
                <li><a href="#">Bagas</a></li>
            </ul>
        </nav>
    </header>

    <section class="search-section">
        <h1>Car Rental</h1>
        <form>
            <input type="text" placeholder="Your Location">
            <input type="date" placeholder="Rental Start Date">
            <input type="time" placeholder="Start Time">
            <input type="date" placeholder="Rental End Date">
            <button type="submit">Search</button>
        </form>
    </section> -->

    <div class="hero">
    <header>
      <div class="left-nav">
        <a href="#">Home</a>
      </div>
      <div class="right-nav">
        <a href="booking.php">BOOKINGS</a>
        <a href="#"><strong>DAFTAR</strong></a>
        <button class="profile-btn">Bagas <i class="fa-solid fa-user"></i></button>
      </div>
    </header>

    <div class="center-box">
      <h1>Car Rental</h1>
      <div class="driver-buttons">
        <button class="btn-outline">Without Driver</button>
        <button class="btn-outline">With Driver</button>
      </div>
    </div>

    <form class="search-bar">
      <div class="input-group">
        <label><i class="fa-solid fa-location-dot"></i></label>
        <input type="text" placeholder="Your Location">
      </div>
      <div class="input-group">
        <label><i class="fa-solid fa-calendar-days"></i></label>
        <input type="date">
      </div>
      <!-- <div class="input-group">
        <label><i class="fa-solid fa-clock"></i></label>
        <input type="time">
      </div> -->
      <div class="input-group">
        <label><i class="fa-solid fa-calendar-days"></i></label>
        <input type="date">
      </div>
      <!-- <div class="input-group">
        <label><i class="fa-solid fa-clock"></i></label>
        <input type="time">
      </div> -->
      <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>

        <!-- rekomendasi  -->

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

    <section class="recommendation">
        <h2>Rekomendasi Mobil</h2>
        <div class="car-container">
            <div class="car">
                <img src="innova.png" alt="Toyota Innova">
                <h3>Toyota Innova</h3>
            </div>
            <div class="car">
                <img src="sigra.png" alt="Daihatsu Sigra">
                <h3>Daihatsu Sigra</h3>
            </div>
            <div class="car">
                <img src="avanza.png" alt="Toyota Avanza">
                <h3>Toyota Avanza</h3>
            </div>
            <div class="car">
                <img src="rush.png" alt="Toyota Rush">
                <h3>Toyota Rush</h3>
            </div>
        </div>
    </section>
    
    <!-- <footer>
        <div class="footer-content">
            <div class="section">
                <h4>Follow us on</h4>
                <ul>
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>Tiktok</li>
                </ul>
            </div>
            <div class="section">
                <h4>Product</h4>
                <ul>
                    <li>Pembayaran Keseluruhan</li>
                    <li>Dashboard</li>
                    <li>Kategori</li>
                </ul>
            </div>

            <div class="section">
                <h4>Contact</h4>
                <ul>
                    <li><i class="fas fa-map-maker-alt"></i>Purbalingga</li>
                    <li>+62 123-4567-890</li>
                    <li>example@domain.com</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Copyright © 2025 Bagas-Yasykur</p>
            <div class="app-links">
                <a href="#">Get it on Google Play</a>
                <a href="#">Download on the App Store</a>
            </div>
        </div>
    </footer> -->
    <footer class="footer">
        <div class="footer-content">
          <!-- Sosial Media -->
          <div class="footer-section">
            <h4>Follow us on</h4> <br> <br>
            <ul>
              <li><i class="fab fa-instagram"></i> Instagram</li>
              <li><i class="fab fa-facebook"></i> Facebook</li>
              <li><i class="fab fa-tiktok"></i> Tiktok</li>
            </ul>
          </div>
      
          <!-- Produk -->
          <div class="footer-section">
            <h4>Product</h4> <br> <br>
            <ul>
              <li>Pembayaran Keseluruhan</li>
              <li>Dashboard</li>
              <li>Kategori</li>
            </ul>
            <div class="app-links">
              <img src="gooplay1.png" alt="Google Play" />
              <img src="appstore.png" alt="App Store" />
            </div>
          </div>
      
          <!-- Kontak -->
          <div class="footer-section">
            <h4>Contact</h4> <br> <br>
            <ul class="ul">
              <li><i class="fas fa-map-marker-alt"></i> Purbalingga</li> <br>
              <li><i class="fab fa-whatsapp"></i> +62 123-4567-890</li> <br>
              <li><i class="fas fa-envelope"></i> sewamobil@gmail.com</li> <br>
            </ul>
          </div>
        </div>
      
        <div class="footer-bottom">
          <p>Copyright © 2025 Bagas-Yasykur</p>
        </div>
      </footer>

</body>
</html>