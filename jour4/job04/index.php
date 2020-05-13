
<form action="index.php" method="post">
  <label for="nom"> Nom </label>
  <input type="text" name="nom"/>
 	
  <label for="prenom"> prenom </label>
  <input type="text" name="prenom"/>
	
  <label for="email"> mail </label>
  <input type="mail" name="email"/>
	
  <input type="submit"/>
</form>

<?php 
	echo "<table>
			<thead>
			  <th>Argument</th>
			  <th>Valeur</th>				
			</thead>
		  </table>";
				
          foreach($_POST as $argt => $value)
          {
              echo "<tr><td>".$argt."</td><td>".$value."</td></tr>";
          }
              echo "</table>";
?>
