<?php
session_start(); // Mulai session

// Sertakan konfigurasi database
include('config.php');

// Proses login jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query untuk memeriksa user di database
    $query = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Set session untuk login
        $_SESSION['username'] = $username;
        // Redirect ke halaman utama setelah login
        header("Location: index.php");
        exit();
    } else {
        // Jika login gagal
        $error = "Username atau password salah!";
    }
}

// Cek apakah user sudah login
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Customer</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('assets/bg.jpg'); /* Gambar latar belakang */
            background-size: contain;
            background-position: center;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8); /* Transparansi untuk form */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            text-align: center;
        }
        .logout-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <?php if (!isset($_SESSION['username'])): ?>
            <h2>Login Customer</h2>
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
            <form action="login_customer.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username" required>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password" required>
                
                <input type="submit" value="Login">
            </form>
        <?php else: ?>
            <h2>Welcome, Customer</h2>
            <form action="logout.php" method="POST">
                <input type="submit" class="logout-btn" value="Logout">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
