<?php 
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

for( $i = 0; $i < 5; $i++ ) {
    echo "ini adalah pengulangan for ke $i <br>";
}

$i = 0;
while( $i < 5 ) {
    echo "ini adalah pengulangan while ke $i <br>";
    $i++;
}

$j = 0;
do {
    echo "ini adalah pengulangan do while ke $j <br>";
    $j++;
} while ( $j < 5 );
?>