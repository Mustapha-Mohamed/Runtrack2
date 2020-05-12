<?php

$i= 0;

$array = [
    200, 204, 173, 98, 171, 404, 459
];

foreach($array as $value)
{
  if($array[$i]%2 == 0){
      echo 'pair';
  }
   else{
       echo'impaire';
   }
   echo $value. '</br>';
   $i = $i + 1;
}


var_dump($array)

?>