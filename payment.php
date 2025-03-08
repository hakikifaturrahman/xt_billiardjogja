<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $table_name = $_POST['table_name'];
    $price = $_POST['price'];
    $payment_method = $_POST['payment_method'];

    // Proses pembayaran sesuai metode
    if ($payment_method == "cash") {
        echo "
        <div style='font-family: Arial, sans-serif; width: 50%; margin: 20px auto; border: 1px solid #ddd; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
            <h2 style='text-align: center; color: #333;'>Invoice Pembayaran</h2>
            <hr>
            <p><strong>Nama Pelanggan:</strong> $customer_name</p>
            <p><strong>Meja:</strong> $table_name</p>
            <p><strong>Metode Pembayaran:</strong> Cash</p>
            <p><strong>Total Harga:</strong> Rp. " . number_format($price, 0, ',', '.') . "</p>
            <hr>
            <h3 style='text-align: center; color: #4CAF50;'>Pembayaran Berhasil!</h3>
            <p style='text-align: center;'>Terima kasih telah menggunakan layanan kami.</p>
        </div>
        ";
    } elseif ($payment_method == "qris") {
        echo "
        <div style='font-family: Arial, sans-serif; width: 50%; margin: 20px auto; border: 1px solid #ddd; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
            <h2 style='text-align: center; color: #333;'>Invoice Pembayaran</h2>
            <hr>
            <p><strong>Nama Pelanggan:</strong> $customer_name</p>
            <p><strong>Meja:</strong> $table_name</p>
            <p><strong>Metode Pembayaran:</strong> QRIS</p>
            <p><strong>Total Harga:</strong> Rp. " . number_format($price, 0, ',', '.') . "</p>
            <hr>
            <h3 style='text-align: center; color: #4CAF50;'>Pembayaran Berhasil!</h3>
            <p style='text-align: center;'>Terima kasih telah menggunakan layanan kami.</p>
            <div style='text-align: center; margin-top: 20px;'>
                <img src='assets/qris.jpg' alt='QRIS Code' style='width: 200px;'>
            </div>
        </div>
        ";
    }
    
}
?>
