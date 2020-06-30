<?php
function ubah_huruf($string){
//kode di sini
    $huruf = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    for ($i = 0; $i < strlen($string); $i++){
        for ($j = 0; $j < 25; $j++){
            if ($string[$i] == $huruf[$j]){
                $string[$i] = $huruf[$j+1];
                break;
            }
        }
    }
    return $string . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>