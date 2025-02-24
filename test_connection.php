<?php
require($_SERVER['DOCUMENT_ROOT'] . '/sugarbloom/database/db_connection.php');
; // Pastikan path sesuai dengan lokasi file koneksi Anda

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi ke database berhasil!";
}
?>
