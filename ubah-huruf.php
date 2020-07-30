<?php
function ubah_huruf($string){
    $shiftedString = "";
    
    for ($i=0; $i<strlen($string); $i++)    {
        $cipher = ord($string[$i]);
        $shiftedChar = chr($cipher + 1);
    
        $shiftedString .= $shiftedChar;
    }
        echo $string." --> ".$shiftedString."<br>";
}

// TEST CASES
    ubah_huruf("wow"); // xpx
    ubah_huruf('developer'); // efwfmpqfs
    ubah_huruf('laravel'); // mbsbwfm
    ubah_huruf('keren'); // lfsfo
    ubah_huruf('semangat'); // tfnbohbu

?>