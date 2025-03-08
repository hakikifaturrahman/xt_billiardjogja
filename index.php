<?php
// Data untuk tabel dan waktu yang tersedia
$tables = [
    
    "Table 1" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 2" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 3" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 4" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 5" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 6" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 7" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 8" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 9" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 10" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 11" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 12" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 13" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 14" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],
    "Table 15" => ["11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00","19:00", "20:00", "21:00", "22:00", "23:00", "00:00", "01:00", "02:00", "03:00"],


];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XT Billiard Jogja</title>
    <link rel="stylesheet" href="style.css">
    <style>
          /* Gambar latar belakang untuk halaman */
        body {
            background-image: url('assets/bg2.jpg'); /* Ganti dengan path gambar latar belakang yang diinginkan */
            background-size: contain; /* Agar gambar memenuhi seluruh halaman */
            background-position: center; /* Posisikan gambar di tengah */
            background-attachment: fixed; /* Gambar latar tetap saat scroll */
            color: black; /* Menjamin teks terlihat jelas di atas latar belakang */
            font-family: Arial, sans-serif;
        }

        /* CSS untuk Navbar */
        nav {
            background-color: rgba(51, 51, 51, 0.8); /* Navbar dengan latar belakang semi-transparan */
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Roboto', sans-serif; /* Menggunakan font yang lebih modern */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan di bawah navbar */
            border-radius: 8px; /* Memberikan border radius untuk tampilan lebih halus */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 20px; /* Memberikan jarak yang lebih luas antar item */
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600; /* Mengubah ketebalan font untuk tampilan lebih elegan */
            font-size: 18px; /* Ukuran font lebih besar untuk kejelasan */
            text-transform: capitalize; /* Mengubah hanya huruf pertama dari setiap kata menjadi kapital */
            letter-spacing: 1px; /* Menambah jarak antar huruf */
            padding: 5px 10px; /* Menambahkan padding untuk efek tombol */
            border-radius: 4px; /* Border radius untuk setiap link */
            transition: all 0.3s ease-in-out; /* Efek transisi saat hover */
        }

        /* Efek saat hover pada link */
        nav ul li a:hover {
            color:rgb(0, 255, 85); /* Mengubah warna teks menjadi emas saat hover */
            background-color: rgba(255, 255, 255, 0.2); /* Memberikan latar belakang semi-transparan */
            transform: translateY(-2px); /* Efek gerakan sedikit ke atas saat hover */
        }

        /* Efek saat navbar di-scroll */
        nav.sticky {
            background-color: rgb(0, 0, 0); /* Mengubah warna navbar saat scroll */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.62); /* Mengubah bayangan saat navbar sticky */
        }


        /* Tombol Masuk berbentuk persegi panjang dengan rounded */
        nav ul li.masuk a {
            padding: 12px 25px; /* Menambah padding untuk membuat tombol lebih besar dan lebih elegan */
            display: inline-block;
            border-radius: 50px; /* Sudut lebih membulat agar lebih modern */
            background-color: #007BFF; /* Warna biru */
            color: white; /* Warna teks putih */
            font-weight: bold; /* Menebalkan font untuk tampilan lebih tegas */
            font-size: 18px; /* Ukuran font lebih besar */
            letter-spacing: 1px; /* Jarak antar huruf agar lebih jelas */
            text-transform: capitalize; /* Mengubah huruf pertama setiap kata menjadi kapital */
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transisi untuk perubahan warna dan efek transformasi */
            text-decoration: none; /* Menghapus garis bawah */
        }

        nav ul li.masuk a:hover {
            background-color: #0056b3; /* Warna biru lebih gelap saat hover */
            transform: scale(1.05); /* Efek zoom saat hover untuk interaksi lebih dinamis */
        }

        nav ul li.masuk a:active {
            transform: scale(0.98); /* Efek sedikit mengecil saat tombol ditekan */
        }

        /* Dropdown dengan tombol persegi panjang rounded */
        nav ul li .dropdown {
            display: none;
            position: absolute;
            background-color: #444;
            top: 100%;
            left: 0;
            z-index: 1000;
            min-width: 150px;
            border-radius: 8px; /* Sudut membulat untuk dropdown */
            overflow: hidden;
        }

        nav ul li:hover .dropdown {
            display: block;
        }

        nav ul li .dropdown a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            background-color: #444;
        }

        nav ul li .dropdown a:hover {
            background-color: #555;
        }

        /* CSS untuk Galeri Foto */
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 15px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="assets/logo.jpeg" alt="XT Billiard Logo">
            <span>XT Billiard Jogja</span>
        </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#booking">Booking Table</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#location">Location</a></li>
            <!-- Menu Masuk dengan kelas khusus -->
            <li class="masuk">
                <a href="#">Masuk</a>
                <div class="dropdown">
                    <a href="register.php">Register Customer</a>
                    <a href="login_customer.php">Login Customer</a>
                    <a href="login_admin.php">Login Admin</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <section id="home">
        <h2>Selamat Datang Di XT Billiard Jogja</h2>
        <p>Tempat favorit Anda untuk menikmati permainan billiard di Yogyakarta. Kami menyediakan 20 meja billiard berkualitas tinggi untuk memastikan pengalaman seru dan tak terlupakan. Pilih meja favorit Anda, tentukan waktu yang tepat, dan pesan sekarang untuk mendapatkan tempat di jam yang Anda inginkan!</p>
    </section>


        
    <!-- Section Meja Tersedia -->
    <section id="booking">
        <h2>Meja Tersedia</h2>
        <form action="booking.php" method="POST">
            <!-- Dropdown untuk memilih tabel -->
            <label for="table_name">Pilih Meja:</label>
            <select name="table_name" required>
                <?php foreach ($tables as $table => $times): ?>
                    <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                <?php endforeach; ?>
            </select>
            
            <!-- Dropdown untuk memilih waktu -->
            <label for="time_slot">Pilih Waktu:</label>
            <select name="time_slot" required>
                <!-- Secara default, waktu dari Table 1 ditampilkan -->
                <?php foreach ($tables["Table 1"] as $time): ?>
                    <option value="<?php echo $time; ?>"><?php echo $time; ?></option>
                <?php endforeach; ?>
            </select>


            <!-- Add new duration dropdown -->
            <label for="duration">Durasi (jam):</label>
            <select name="duration" required>
                <option value="1">1 Jam</option>
                <option value="2">2 Jam</option>
                <option value="3">3 Jam</option>
                <option value="4">4 Jam</option>
                <option value="5">5 Jam</option>
            </select>
            
            <!-- Input untuk tanggal -->
            <label for="booking_date">Pilih Tanggal:</label>
            <input type="date" name="booking_date" required>
            
            <!-- Input untuk nama pelanggan -->
            <label for="customer_name">Nama:</label>
            <input type="text" name="customer_name" required>
            
            <!-- Tombol submit -->
            <button type="submit">Pesan</button>
        </form>
    </section>


    <!-- Tentang Kami -->
    <section id="about">
        <h2>Tentang XT Billiard</h2>
        <p>XT Billiard merupakan tempat bermain billiard yang ada di Yogyakarta, tepatnya berada di sekitar XT Square di Jalan Veteran, Pandeyan, Umbulharjo. Buka setiap hari mulai dari jam 11 siang sampai 3 pagi. Disini tersedia sekitar 30 meja Xingjue dengan peralatan dan kondisi yang masih bagus, dimulai dari stik sampai ferrule. Layaknya tempat billiard lain, disini juga ada cafe yang siap menerima pesanan dari pengunjung yang sekedar ingin memesan minuman atau makanan. Hampir setiap hari tempat ini selalu ramai, terlebih ketika sudah jam 8 sampai 12 malam.</p>
        
        <!-- Galeri Foto -->
        <div class="image-gallery" style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1rem;">
            <img src="assets/image1.jpg" alt="Image 1" style="width: calc(33.33% - 1rem); border-radius: 8px;">
            <img src="assets/image2.jpg" alt="Image 2" style="width: calc(33.33% - 1rem); border-radius: 8px;">
            <img src="assets/image3.jpg" alt="Image 3" style="width: calc(33.33% - 1rem); border-radius: 8px;">
        </div>
    </section>

    <!-- Kontak Kami -->
    <section id="contact">
        <h2>Contact Kami</h2>
        <p>Untuk pemesanan dan pertanyaan, jangan ragu untuk menghubungi kami di:</p>
        <!-- Footer -->
<footer class="footer">
    <div class="social-links">
        <a href="https://www.facebook.com/xtsquare.official" style="display: flex; align-items: center; gap: 10px; margin-top: 10px;">
            <img src="assets/facebook.svg" alt="Facebook" style="width: 30px; height: 30px;">
            <span>Facebook Kami</span>
        </a>
        <a href="https://www.instagram.com/xtbilliard?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="display: flex; align-items: center; gap: 10px; margin-top: 10px;">
            <img src="assets/fotoinstagram.png" alt="Instagram" style="width: 30px; height: 30px;">
            <span>Instagram Kami</span>
        </a>
        <a href="https://www.tiktok.com/@xtbilliard?is_from_webapp=1&sender_device=pc" style="display: flex; align-items: center; gap: 10px; margin-top: 10px;">
            <img src="assets/fototiktok.png" alt="LinkedIn" style="width: 30px; height: 30px;">
            <span>TikTok Kami</span>
        </a>
    </div>
    <div class="contact-info" style="display: flex; align-items: center; gap: 10px; margin-top: 10px;">
        <img src="assets/fototelpon.png" alt="Phone Icon" style="width: 30px; height: 30px;">
        <p class="footer-text">
          Hubungi Kami: <a href="tel:+6281234567890">+62 822-2006-0909</a>
        </p>
    </div>
    <p class="footer-text">© 2024 XT Billiard Jogja. Terima kasih telah memilih kami sebagai tempat hiburan Anda. Semua hak cipta dilindungi.</p>
</footer>
    </section>

    <!-- Lokasi Kami -->
    <section id="location">
        <h2>Lokasi Kami</h2>
        <iframe src="https://maps.google.com/maps?q=XT+Billiard+Jogja&output=embed" width="30%" height="350"></iframe>
    </section>
</body>
</html>
