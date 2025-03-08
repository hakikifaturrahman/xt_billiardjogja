<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table = htmlspecialchars($_POST['table']);
    $nama = htmlspecialchars($_POST['nama']);
    $no_hp = htmlspecialchars($_POST['no_hp']);

    echo "<h1>Terima Kasih, $nama!</h1>";
    echo "<p>Anda telah berhasil memesan $table.</p>";
    echo "<p>Kami akan menghubungi Anda di nomor: $no_hp.</p>";
}
?>
