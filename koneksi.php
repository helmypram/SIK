<?php
// file koneksi.php
$host = "localhost";
$user = "root";
$pass = "";
$db = "web_kesehatan";

$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>