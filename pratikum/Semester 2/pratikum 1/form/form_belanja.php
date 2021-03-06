<form action="form_belanja.php" method="POST">
<h2>Belanja Online</h2>
<hr>
Costumer : <input type="text" name="nama" placeholder="nama costumer" value="">
<br>
Pilih Produk : 
<input type="radio" name="produk" value="TV" >TV
<input type="radio" name="produk" value="Kulkas" >Kulkas
<input type="radio" name="produk" value="Mesin Cuci" > Mesin Cuci
<br>
<label for="Jumlah"> Jumlah</label>
 <input type="text" name="jumlah" value="">
<br>
<input type="submit" value="simpan" name="proses">
</form>

<hr>

<?php 

$costumer =$_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
echo "<br/>Nama Costumer : " .$costumer;
echo "<br/>Produk Pilihan : " .$produk;
echo "<br/>Jumlah Beli : " .$jumlah; 
echo "<br/> Total Belanja : " .$jumlah;
?>