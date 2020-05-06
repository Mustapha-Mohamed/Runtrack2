<?php

$nombre =0;

while($nombre <=100)
{
    if($nombre % 3)
    {
        echo 'Fizz';
        echo '</br>';
        
    }

    elseif($nombre % 5)
    {
        echo 'Buzz';
        echo '</br>';

    }
    
   

    else
    {
        echo '</br>';
        echo $nombre;
    }

    $nombre++;

}






?>