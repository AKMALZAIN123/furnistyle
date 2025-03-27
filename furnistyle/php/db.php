<?php
$host = 'localhost';
$dbname = 'furnistyle';
$username = 'root';
$password = ''; // Kosong untuk XAMPP default

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil!"; // Hapus baris ini setelah testing
} catch (PDOException $e) {
    die("Error koneksi: " . $e->getMessage());
}
?>