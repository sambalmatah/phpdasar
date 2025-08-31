<?php 
    // tanggal
    echo date("l, d-M-Y");

    echo "<br>";

    // waktu/jam
    echo time(); // detik yang sudah berlalu sejak 1 Januari 1970

    echo "<br>";

    // mencari tanggal untuk 2 hari berikutnya
    echo date("l", time()+60*60*24*2);
 ?>