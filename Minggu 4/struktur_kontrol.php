<?php
$nilaiNumerik = 92;

//Soal Nomor 4.1 Pernyataan Kondisional if
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai Huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai Huruf: D";
}


echo "<br>";
//Soal Nomor 4.2 Pernyataan Kondisional while
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";

//Soal Nomor 4.3  Pernyataan Kondisional for
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
};
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
//Soal Nomor 4.4 Peryataan Kondisional foreach
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";


echo "<br>";
//Soal Nomor 4.5 Pernyataan Kondisional foreach dan if
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
    }
        echo "Nilai: $nilai (Lulus) <br>";
    }

?>