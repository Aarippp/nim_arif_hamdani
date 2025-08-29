<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    echo "Nama : " . $nama;
    echo "<br>";
    echo "Email : " . $email;
    echo "<br>";
    echo "Jurusan : " . $jurusan;
}


?>