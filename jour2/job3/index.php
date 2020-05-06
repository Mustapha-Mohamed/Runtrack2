<?php

$nombre =0;

while($nombre <= 100)
{
    if($nombre <=20)
    {
        echo'<i>'.$nombre.'</i>';
        echo "<br>";
    }
    elseif($nombre >=25 & $nombre <=50 &  $nombre !=42 )
    {
        echo "<u>".$nombre."</u>";
        echo "<br>";
    }

    elseif($nombre ==42)
    {
        echo'la plateforme';
        echo "<br>";
    }

    else{
        echo  $nombre;
        echo "<br>";
    }

    $nombre++;
}






?>