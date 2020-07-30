<?php
function tukar_besar_kecil($string){
    return $string." --> ".(strtolower($string) ^ strtoupper($string) ^ $string);
}

function tukar_besar_kecik($string){
    $hasil = "";
    for($i=0; $i<strlen($string); $i++){
        $orde = ord($string[$i]);       //ord -->mengubah char menjadi int
        if($orde>64 && $orde<91)
            $hasil .= chr($orde+32);     //char --> mengubah int menjadi char
        else if($orde>96 && $orde<123)
            $hasil .= chr($orde-32);
        else
            $hasil .= $string[$i];
    }
    return $string." --> ".$hasil;
}


// TEST CASES
echo "<h3>Algoritma 1</h3><br>";
echo tukar_besar_kecil('Hello World')."<br>"; // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY')."<br>"; // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!')."<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me')."<br>"; // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW')."<br>"; // "001-a-3-5tRDyw"

echo "<h3>Algoritma II</h3><br>";
echo tukar_besar_kecik('Hello World')."<br>"; // "hELLO wORLD"
echo tukar_besar_kecik('I aM aLAY')."<br>"; // "i Am Alay"
echo tukar_besar_kecik('My Name is Bond!!')."<br>"; // "mY nAME IS bOND!!"
echo tukar_besar_kecik('IT sHOULD bE me')."<br>"; // "it Should Be ME"
echo tukar_besar_kecik('001-A-3-5TrdYW')."<br>"; // "001-a-3-5tRDyw"

?>