<?php
function skor_terbesar($arr){

    foreach($arr as $key => $row){
      $nilai[$key] = $row["nilai"];
      $kelas[$key] = $row["kelas"];
    }

    array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC, $arr);

    for($j=0; $j<count($arr); $j++){
      if($arr[$j]["kelas"]=="Laravel")
        $kelasLR[] = $arr[$j];
      else if($arr[$j]["kelas"]=="React Native")
        $kelasRN[] = $arr[$j]; 
      else if($arr[$j]["kelas"]=="React JS")
        $kelasRJ[] = $arr[$j];
    }

    $result[] = $kelasLR[0];
    $result[] = $kelasRN[0];
    $result[] = $kelasRJ[0];

    $kunci = ["Laravel","React Native","React Js"];
    for($i=0; $i<3; $i++){
      $baru[$kunci[$i]] = $result[$i];
    }
    echo "<pre>";
    print_r($baru);
    echo "</pre>";
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

(skor_terbesar($skor));
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