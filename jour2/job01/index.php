<?php 

 $nombre = 0 ;
 
 while($nombre <= 100)

 {
     if($nombre == 30)
     {
         echo "<b><u>".$nombre."</b></u><br/>";
     }

     else{
         echo $nombre;
         echo '</br>';
     }

     $nombre++;
 }

?>