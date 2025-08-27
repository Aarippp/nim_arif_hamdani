<?php
// Operator and (and atau &&)
// true, jika keduanya true
$hasil = true && true;
var_dump($hasil); echo "<br>";

// Operator or (atau ||)
// true, jika salah satu true
$hasil = true || false;
var_dump($hasil); echo "<br>";

// Operator not (!)
// true, jika false
$hasil = !false;
var_dump($hasil); echo "<br>";

echo "<br>";

// Operator sama dengan (==)
// true, jika keduanya sama
$hasil = 1 == 1;
var_dump($hasil); echo "<br>";

// Operator tidak sama dengan (!=)
// true, jika keduanya tidak sama
$hasil = 1 != 2;
var_dump($hasil); echo "<br>";

// Operator sama dan identik (===)
// true, jika keduanya sama dan identik/tipe datanya sama
$hasil = 1 === "1";
var_dump($hasil); echo "<br>";

// Operator kurang dari (<)
// true, jika kiri kurang dari kanan
$hasil = 1 < 2;
var_dump($hasil); echo "<br>";

// Operator kurang dari sama dengan (<=)
// true, jika kiri kurang dari sama dengan kanan
$hasil = 2 <= 2;
var_dump($hasil); echo "<br>";

// Operator lebih dari (>)
// true, jika kiri lebih dari kanan
$hasil = 3 > 2;
var_dump($hasil); echo "<br>";

// Operator lebih dari sama dengan (>=)
// true, jika kiri lebih dari sama dengan kanan
$hasil = 3 >= 2;
var_dump($hasil); echo "<br>";

// Struktur kontrol if
// if (kondisi) {
//     statement
// }

    $user == "admin";
    if ($user == "admin"){ 
        echo "Selamat datang admin";
    }




?>