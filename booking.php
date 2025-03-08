<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "xt_billiard";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $table_name = $_POST['table_name'];
    $time_slot = $_POST['time_slot'];
    $duration = $_POST['duration'];
    $booking_date = $_POST['booking_date'];
    
    // Calculate end time
    $start_time = DateTime::createFromFormat('H:i', $time_slot);
    $end_time = clone $start_time;
    $end_time->modify("+{$duration} hours");
    $end_time_formatted = $end_time->format('H:i');
    
    // Calculate price (assuming 45000 per hour)
    $price = $duration * 45000;

    // Query untuk menyimpan data ke tabel bookings
    $sql = "INSERT INTO bookings (customer_name, table_name, time_slot, duration, end_time, price, booking_date)
            VALUES ('$customer_name', '$table_name', '$time_slot', $duration, '$end_time_formatted', $price, '$booking_date')";

    if ($conn->query($sql) === TRUE) {
        // Booking berhasil, tampilkan form pembayaran
        echo "
        <div style='font-family: Arial, sans-serif; width: 50%; margin: 20px auto; border: 1px solid #ddd; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
            <h2 style='text-align: center; color: #333;'>Invoice Booking</h2>
            <hr>
            <p><strong>Nama Pelanggan:</strong> $customer_name</p>
            <p><strong>Meja:</strong> $table_name</p>
            <p><strong>Tanggal Booking:</strong> $booking_date</p>
            <p><strong>Waktu:</strong> $time_slot - $end_time_formatted</p>
            <p><strong>Durasi:</strong> $duration Jam</p>
            <p><strong>Total Harga:</strong> Rp. " . number_format($price, 0, ',', '.') . "</p>
            <hr>
            <h3 style='text-align: center;'>Pilih Metode Pembayaran</h3>
            <form action='payment.php' method='POST' style='text-align: center;'>
                <input type='hidden' name='customer_name' value='$customer_name'>
                <input type='hidden' name='table_name' value='$table_name'>
                <input type='hidden' name='price' value='$price'>
                <input type='radio' id='cash' name='payment_method' value='cash' required>
                <label for='cash'>Cash</label>&nbsp;&nbsp;
                <input type='radio' id='qris' name='payment_method' value='qris'>
                <label for='qris'>QRIS</label><br><br>
                <button type='submit' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;'>Bayar</button>
            </form>
        </div>
        ";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
