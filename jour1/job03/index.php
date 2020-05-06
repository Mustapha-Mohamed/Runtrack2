<?php


	$entier= 10;
    echo $entier;
    $entier = 12;
    echo $entier;

    echo "<br>";
     
	$Booléen='True';
    echo $Booléen;
    $Booléen='false';
    echo $Booléen;

     echo "<br>";

     $str='de ';
     $str1='chaine';
     $str2='caractere';
     echo"$str1 de  $str2";


  
?>



<?php
    $bool = true;
    $int = 10;
    $string = "La plateforme";
    $float = -255.5;
   
?>

<table>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>
    <tr>
        <td>
            <?php
                echo gettype($bool);
            ?>
        </td>
        <td>
            <?php
                echo "bool";
            ?>
        </td>
        <td>
            <?php
                echo $bool;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo gettype($int);
            ?>
        </td>
        <td>
            <?php
                echo "int";
            ?>
        </td>
        <td>
            <?php
                echo $int;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo gettype($string);
            ?>
        </td>
        <td>
            <?php
                echo "string";
            ?>
        </td>
        <td>
            <?php
                echo $string;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo gettype($float);
            ?>
        </td>
        <td>
            <?php
                echo "float";
            ?>
        </td>
        <td>
            <?php
                echo $float;
            ?>
        </td>
    </tr>

</table>