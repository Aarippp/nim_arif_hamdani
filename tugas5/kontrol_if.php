<?php
// Operator if 
// if (kondisi){
//     perintah
// }
$user = "rapa";
if ($user == "admin") {
    echo "Selamat datang admin";
}elseif ($user == "arip"){
    echo "Selamat datang arif";
}elseif ($user == "lanang"){
    echo "Selamat datang lanang";
}else{
    echo "Mohon maaf, anda belum terdaftar";
}



?>