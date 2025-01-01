<?php
// Değerlendirme dosyasını oku
$dosyaAdi = "degerlendirmeler.txt";

if (file_exists($dosyaAdi)) {
    $icerik = file_get_contents($dosyaAdi);
    echo "<h1>Gelen Değerlendirmeler</h1>";
    echo "<pre>$icerik</pre>";
} else {
    echo "<h1>Henüz değerlendirme bulunmuyor.</h1>";
}
?>
