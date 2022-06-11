<?php
$nim = "120103040";
$nama = "Arya Maulana Kurniawan";
$umur = 20;
$nilai = 95;
$status = TRUE;

echo "NIM  : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
?>