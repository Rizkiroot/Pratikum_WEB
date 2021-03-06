<?php 
$sn1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$sn2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>70];
$sn3 = ['id'=>3,'nim'=>'01131','uts'=>60,'uas'=>86,'tugas'=>68];
$sn4 = ['id'=>4,'nim'=>'01141','uts'=>90,'uas'=>91,'tugas'=>92];
$sn5 = ['id'=>5,'nim'=>$_GET['nim'],'uts'=>$_GET['nilai_uts'],'uas'=>$_GET['nilai_uas'],'tugas'=>$_GET['nilai_tugas']];
$ar_nilai=[$sn1,$sn2,$sn3,$sn4,$sn5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br>
<br>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas</th>
      <th scope="col">Nilai Akhir</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    $nomor = 1;
    foreach($ar_nilai as $ns){
    	echo "<tr>";
        echo '<td>'.$nomor.'</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir =($ns['uts']+ $ns['uas']+ $ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo "</tr>";
        $nomor++;
    }
    ?>
</tbody>
</table>
</body>
</html>
<!-- Muhama Rizki -->
<!-- NIM : 0110220098 -->
<!-- TI 01 -->