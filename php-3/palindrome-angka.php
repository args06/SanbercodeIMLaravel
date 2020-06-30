<?php
function reverseString($string){
    $tampung = "";
    $patokan = 0;
    for ($i = strlen($string) - 1; $i >= 0; $i--){
        $tampung[$patokan] = $string[$i];
        $patokan++;
    }
    return $tampung;
}

function palindrome_angka($angka) {
    $angka += 1;
    $hasil = $angka;
    while (true){
        $tampung = reverseString((string)$angka);
        if ($tampung == $angka){
            $hasil = $tampung;
            break;
        } else{
            $angka++;
        }
    }
    return $hasil;
}

// TEST CASES
echo palindrome_angka(8) . "<br>"; // 9
echo palindrome_angka(10) . "<br>"; // 11
echo palindrome_angka(117) . "<br>"; // 121
echo palindrome_angka(175) . "<br>"; // 181
echo palindrome_angka(1000) . "<br>"; // 1001

?>