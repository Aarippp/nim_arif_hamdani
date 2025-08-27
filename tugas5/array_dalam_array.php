<?php

$siswa = [
    [
        "nama" => "Arif",
        "umur" => "18",
        "nilai" => [90, 95, 92]
    ],
    [
        "nama" => "Fauzan",
        "umur" => "15",
        "nilai" => [80, 80, 80]
    ]
];

foreach ($siswa as $data){
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Umur: " . $data["umur"] . "<br>";
    echo "Nilai: " . implode(",",$data["nilai"]) . "<br><br> ";
}


?>