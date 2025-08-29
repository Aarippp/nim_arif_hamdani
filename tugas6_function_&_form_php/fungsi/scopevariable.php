<?php

$globalVariable = 100;

function contohScope(){
    $localVariable = 200;
    
    echo "Lokal Variable : $localVariable <br>";

    global $globalVariable;
    echo "Global Variable : $globalVariable". "<br>";
}

// contohScope()
echo "lokal Variable : $localVariable <br>"; // kosaong, karena local hanya berlaku di dalam fungsi
echo "Global Variable : $globalVariable". "<br>";




?>