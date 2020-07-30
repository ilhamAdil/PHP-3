<?php
function tentukan_deret_aritmatika($arr) {
    $b = $arr[1] - $arr[0];
    for($i=1; $i<count($arr); $i++){
        $test = $arr[$i]-$arr[$i-1];
        if($test != $b){
            return "false<br>";
        }
    }
    return "true<br>";
}

// TEST CASES
echo "[1, 2, 3, 4, 5, 6] --> ".tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "[2, 4, 6, 12, 24] --> ".tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "[2, 4, 6, 8] --> ".tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "[2, 6, 18, 54] --> ".tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "[1, 2, 3, 4, 7, 9] --> ".tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>