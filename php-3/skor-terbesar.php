<?php
function skor_terbesar($arr)
{
    $Laravel = [
        "nama" => $arr[0]["nama"],
        "kelas" => $arr[0]["kelas"],
        "nilai" => $arr[0]["nilai"]
    ];

    $ReactNative = [
        "nama" => $arr[1]["nama"],
        "kelas" => $arr[1]["kelas"],
        "nilai" => $arr[1]["nilai"]
    ];

    $ReactJS = [
        "nama" => $arr[3]["nama"],
        "kelas" => $arr[3]["kelas"],
        "nilai" => $arr[3]["nilai"]
    ];

    for ($i = 0; $i < count($arr)-1; $i++) {
        if ($arr[$i]["kelas"] == "Laravel") {
            if ($Laravel["nilai"] < $arr[$i]["nilai"]) {
                $Laravel["nama"] = $arr[$i]["nama"];
                $Laravel["kelas"] = $arr[$i]["kelas"];
                $Laravel["nilai"] = $arr[$i]["nilai"];
            }
        } else if ($arr[$i]["kelas"] == "React Native") {
            if ($ReactNative["nilai"] < $arr[$i]["nilai"]) {
                $ReactNative["nama"] = $arr[$i]["nama"];
                $ReactNative["kelas"] = $arr[$i]["kelas"];
                $ReactNative["nilai"] = $arr[$i]["nilai"];
            }
        } else if ($arr[$i]["kelas"] == "React JS") {
            if ($ReactJS["nilai"] < $arr[$i]["nilai"]) {
                $ReactJS["nama"] = $arr[$i]["nama"];
                $ReactJS["kelas"] = $arr[$i]["kelas"];
                $ReactJS["nilai"] = $arr[$i]["nilai"];
            }
        }
    }
    $Array = [$Laravel,$ReactNative,$ReactJS];

    return ($Array);
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];
echo "<pre>";
print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>