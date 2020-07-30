<?php

function palindrome_angka($angka) {
    while(1){
        $string = strval($angka);
        $balik = "";                
        for($i=strlen($string)-1; $i>=0; $i--){
            $balik .= $string[$i];
        }
        if($balik == $string){
            return $balik;
        }
        else{            
            $angka++;
        }
    }
}
            


// TEST CASES
echo "8 --> ".palindrome_angka(8)."<br>"; // 9
echo "10 --> ".palindrome_angka(10)."<br>"; // 11
echo "117 --> ".palindrome_angka(117)."<br>"; // 121
echo "175 --> ".palindrome_angka(175)."<br>"; // 181
echo "1000 --> ".palindrome_angka(1000)."<br>"; // 1001

?>