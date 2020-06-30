<?php
function pasangan_terbesar($angka){
    $tampung = $angka[0] . $angka[1];
    for ($i = 1; $i < strlen($angka)-1; $i++){
        $tampung2 = $angka[$i] . $angka[$i+1];
        if ((int)$tampung < (int)$tampung2){
            $tampung = $tampung2;
        }
    }
    return $tampung;
}

// TEST CASES
echo pasangan_terbesar((string)641573) . "<br>"; // 73
echo pasangan_terbesar((string)12783456) . "<br>"; // 83
echo pasangan_terbesar((string)910233) . "<br>"; // 91
echo pasangan_terbesar((string)71856421) . "<br>"; // 85
echo pasangan_terbesar((string)79918293) . "<br>"; // 99

?>