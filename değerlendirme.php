<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $isim = htmlspecialchars($_POST['isim']); // Kullanıcı adını güvenli bir şekilde al
    $mesaj = htmlspecialchars($_POST['mesaj']); // Mesajı güvenli bir şekilde al

    // Dosyaya yazma
    $dosya = 'degerlendirmeler.txt'; // Değerlendirmeleri saklamak için bir dosya
    $yeniDegerlendirme = "İsim: $isim\nMesaj: $mesaj\n---\n";

    if (file_put_contents($dosya, $yeniDegerlendirme, FILE_APPEND)) {
        echo "Teşekkürler! Değerlendirmeniz kaydedildi.";
    } else {
        echo "Bir hata oluştu, lütfen tekrar deneyin.";
    }
} else {
    echo "Form gönderilmedi.";
}
?>
