<?php
$host = 'localhost'; // Nama hostnya
$username = 'manh8362_artikel_user'; // Username
$password = 'krisbanarto001'; // Password (Isi jika menggunakan password)
$database = 'manh8362_artikel'; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
