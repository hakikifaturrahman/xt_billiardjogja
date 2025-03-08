<?php
session_start(); // Mulai session

// Sertakan konfigurasi database
include('config.php');

// Variabel error
$error = '';

// Proses registrasi jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Validasi jika password dan konfirmasi password tidak cocok
    if ($password !== $confirm_password) {
        $error = "Password dan konfirmasi password tidak cocok!";
    } else {
        // Query untuk memeriksa apakah username sudah ada di database
        $query = "SELECT * FROM customer WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $error = "Username sudah terdaftar!";
        } else {
            // Query untuk menyimpan data registrasi
            $query = "INSERT INTO customer (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $query)) {
                $_SESSION['username'] = $username;
                // Redirect ke halaman login setelah registrasi berhasil
                header("Location: index.php");
                exit();
            } else {
                $error = "Terjadi kesalahan saat registrasi. Silakan coba lagi.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Customer</title>
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
        }
        .register-container {
            background: #fff;
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
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Registrasi Customer</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form action="register.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Masukkan Username" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
            
            <label for="confirm_password">Konfirmasi Password</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Password" required>
            
            <input type="submit" value="Registrasi">
        </form>
    </div>
</body>
</html>
