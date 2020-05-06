<?php

$nombre =0;

while($nombre <= 100)
{
    if($nombre == 3 || $nombre== 11 || $nombre== 20)
    {
        $nombre++;
    }
    else{
        echo '</br>';
        echo $nombre;
    }

    $nombre++;
}





?>