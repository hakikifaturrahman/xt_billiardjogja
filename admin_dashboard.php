<?php
session_start(); // Memulai sesi

// Pastikan hanya admin yang dapat mengakses halaman ini
if (!isset($_SESSION['admin_username'])) {
    header("Location: login_admin.php");
    exit();
}

// Sertakan koneksi ke database
include('config.php');

// Tambahkan data baru
if (isset($_POST['add_booking'])) {
    $customer_name = $_POST['customer_name'];
    $table_name = $_POST['table_name'];
    $time_slot = $_POST['time_slot'];
    $booking_date = $_POST['booking_date'];

    $query = "INSERT INTO bookings (customer_name, table_name, time_slot, booking_date) 
              VALUES ('$customer_name', '$table_name', '$time_slot', '$booking_date')";
    mysqli_query($conn, $query);
    header("Location: admin_dashboard.php");
    exit();
}

// Perbarui data
if (isset($_POST['update_booking'])) {
    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $table_name = $_POST['table_name'];
    $time_slot = $_POST['time_slot'];
    $booking_date = $_POST['booking_date'];

    $query = "UPDATE bookings SET 
              customer_name='$customer_name', 
              table_name='$table_name', 
              time_slot='$time_slot', 
              booking_date='$booking_date' 
              WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: admin_dashboard.php");
    exit();
}

// Hapus data
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $query = "DELETE FROM bookings WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: admin_dashboard.php");
    exit();
}

// Mendapatkan data pemesanan dari database
$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - XT Billiard Jogja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input, form select, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        form button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .logout-btn {
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            background-color: #dc3545;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>

        <h2>Daftar Pemesanan</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Customer</th>
                <th>Meja</th>
                <th>Waktu</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['table_name']; ?></td>
                    <td><?php echo $row['time_slot']; ?></td>
                    <td><?php echo $row['booking_date']; ?></td>
                    <td>
                        <a href="?delete_id=<?php echo $row['id']; ?>" 
                           onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

        <h2>Tambah Pemesanan Baru</h2>
        <div class="form-container">
            <form action="" method="POST">
                <label>Nama Customer:</label>
                <input type="text" name="customer_name" required>
                <label>Meja:</label>
                <input type="text" name="table_name" required>
                <label>Waktu:</label>
                <input type="text" name="time_slot" required>
                <label>Tanggal:</label>
                <input type="date" name="booking_date" required>
                <button type="submit" name="add_booking">Tambah Pemesanan</button>
            </form>
        </div>

        <form action="logout_admin.php" method="POST">
            <button class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
