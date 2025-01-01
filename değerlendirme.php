<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    // Verileri e-posta olarak göndermek
    $to = "efeeymenefeeymen81@gmail.com";  // Buraya kendi e-posta adresinizi yazın
    $subject = "Yeni Değerlendirme Mesajı";
    $body = "Ad Soyad: $name\nE-posta: $email\nDeğerlendirme: $rating Yıldız\nMesaj: $message";
    $headers = "efeeymenefeeymen81@gmail.com";  // Buraya kendi e-posta adresinizi yazın

    // E-posta gönderme
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi.";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
}
?>
