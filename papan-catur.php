<?php

function papan_catur($angka) {
    $col = $angka*2;
    for($i=1; $i<=$angka; $i++){
        for($j=1; $j<=$col; $j++){
            if($i%2==0){
                if($j%2==0){
                    echo "#";
                }
                else{ 
                    echo "&nbsp; ";
                }
            }
            else{
                if($j%2==0){
                    echo "&nbsp; ";
                }
                else{
                    echo "#";
                }
            }            
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/