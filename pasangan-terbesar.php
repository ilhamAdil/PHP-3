<?php
function pasangan_terbesar($angka){

    $max = 0; 
    $num = strval($angka);
    for($i=0; $i<strlen($num); $i++){
        $pisah = substr($num,$i,2);
        $baru = intval($pisah);
        if($baru>=$max)
            $max = $baru;
    }
    return $angka." --> ".$max."<br>";    
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>