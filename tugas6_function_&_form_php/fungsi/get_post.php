<?php

// if (isset($_GET["nama"])) {
//     $namaHero = $_GET["nama"];
//     echo "Hero favorit saya :" . $namaHero;
// }

// $namaHero = $_GET["nama"];
// echo "Hero favorit saya :" . $namaHero;

if (isset($_POST["nama"])) {
    $namaHero = $_POST["nama"];
    echo "Hero favorit saya :" . $namaHero;
}


?>

<form action="get_post.php" method="post">
    Nama Hero :
    <input type="text" name="nama">
    <input type="submit">
</form>