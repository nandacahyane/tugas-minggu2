<?php
require($_SERVER['DOCUMENT_ROOT'] . '/database/db_connection.php');

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Masukkan ke database
$sql = "INSERT INTO feedbacks (name, email, message) VALUES ('$name', '$email', '$message')";

if($mysqli->query($sql)){
    echo "data berhasil disimpan";
} else {
    echo "gagal disimpan";
}
?>