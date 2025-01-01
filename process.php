<?php
// Veritabanı bağlantı bilgilerini buraya girin
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form verilerini al
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Veritabanına ekleme sorgusu
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Mesajınız başarıyla gönderildi.";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
