<?php

function papan_catur($angka) {
    $tampung = " ";
    for ($i = 0; $i < $angka; $i++){
        for ($j = 0; $j < $angka; $j++){
            if (($i % 2 == 1) && $j == 0){
                $j++;
                $tampung = $tampung . "&#160";
            }
            $tampung = $tampung . "# ";
        }
        $tampung = $tampung . "<br>";
    }
    return $tampung;
}

// TEST CASES

echo papan_catur(4) . "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8) . "<br>";
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

echo papan_catur(5) . "<br>";
/*
# # # # #
 # # # #
# # # # #
 # # # #
# # # # #
*/