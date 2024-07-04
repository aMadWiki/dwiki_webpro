<?php
    // Menghitung volume kubus
    $sisi = 15; // Panjang sisi kubus dalam cm
    $volume = $sisi * $sisi * $sisi;

    // Membuat variabel teks1 dan teks2
    $teks1 = "Ini dia";
    $teks2 = "Hasilnya guys";

    // Menggabungkan nilai dari variabel teks1 dan teks2 menggunakan operator string
    $gabung = $teks1 . " " . $teks2;

    // Menampilkan hasil
    echo "Panjang sisi kubus = $sisi cm<br>";
    echo "Volume kubus = $volume cm³<br>";
    echo "$gabung";
?>