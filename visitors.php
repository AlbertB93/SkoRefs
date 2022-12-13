<?php
$cfg['file'] = "licznik.txt"; // ścieżka z plikiem
$cfg['read'] = file_get_contents($cfg['file']); // odczytuje plik

if(!isset($_COOKIE['licznik'])) {
    setcookie('licznik', 'licznik', time() + 60); // wysyła ciasteczko do przeglądarki użytkownika
    $fp = fopen($cfg['file'], "w"); // otwiera plik
    flock($fp, 2); // blokuje plik
    fwrite($fp, $cfg['read']+1); // zapis do pliku
    flock($fp,3); // blokuje plik
    fclose($fp); // zamyka plik
}
    echo $cfg['read']; // wyświetlenie liczby odwiedzin
?>