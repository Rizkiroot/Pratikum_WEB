<?php 
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    // Mencetak buah index ke 2
    echo $ar_buah [2];
    // Mencetak jumlah buah
    echo '<br/> Jumlah buah ' . count($ar_buah);
    // Mencetak Seluruh buah
    echo '<ol>';
        foreach ($ar_buah as $buah){
        echo '<li>' . $buah . '</li>';
        }
    echo '</ol>';
    //  Menambahkan Buah 
    $ar_buah[]="Durain";
    //  Hapus buah index ke 1
    unset($ar_buah[1]);
    // Merubah buah index ke 2 menjadi Manggis
    $ar_buah[2]="Manggis";
    //  Cetak seleuruh buah dengan indexnya
    echo '<ul>';
    foreach($ar_buah as $k => $v) {
        echo '<li> buah index - ' . $k . ' adalah ' . $v . '</li>';
    }
    echo '<ul/>';
?>