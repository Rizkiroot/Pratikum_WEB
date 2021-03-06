<?php 
// Definisikan Konstanta
define("PHI",3.14);
define("DBNAME", "Inventori");
define("DBSERVER" , "localhost");

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "Luas  Lingkaran dengan Jari" .$jari.  " : " .$luas;
echo "<br/> Kelilingnya : " .$kll;
?>
<hr>
<?php 
echo "Nama Database : " .DBNAME; 
echo "<br/>Lokasi databasenya ada di " .DBSERVER;
?>