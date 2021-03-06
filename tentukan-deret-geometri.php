<?php
function tentukan_deret_geometri($arr) {
    $b = $arr[1]/$arr[0];
    for($i=1; $i<count($arr); $i++){
        $test = $arr[$i]/$arr[$i-1];
        if($test != $b){
            return "false<br>";
        }
    }
    return "true<br>";
}

//TEST CASES
echo "[1, 3, 9, 27, 81] --> ".tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "[2, 4, 8, 16, 32] --> ".tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "[2, 4, 6, 8] --> ".tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "[2, 6, 18, 54] --> ".tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "[1, 2, 3, 4, 7, 9] --> ".tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>