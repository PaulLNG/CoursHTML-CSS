<center>
 <link rel="stylesheet" href="style.css">
<?php 

	session_start();

	echo "Bonjour ".$_SESSION["login"]; 

?>

	<table name="user" width="80%" border="1">
		<tr>
			<td> Login </td>
			<td> Mot de passe </td>
			<td> Actions </td>
			
<?php
	
	$i = 1;
	if (($handle = fopen("user.csv", "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000 , ";")) !== FALSE) {	
			
				echo "<tr>
					 <td>". $data[0] . "</td> " . 
					 "<td>" . $data[1] . "</td>
					 <td> 
					 <a href='modifUser.php?ligne=".$i."'> <button type='button'> Modifier </button> </a> 
					 <a href='supprimerUser.php?ligne=".$i."'> <button type='button'> Supprimer </button> </a>
					 </td>
				</tr>
				<br/>\n "; 
				
				$i ++;
		}
		
		fclose($handle);
			
		}
		

?> 

	</table>

	<br> 


	<form method="post" name="deco">
		
		<input type="submit" name="deconnexion" value="Se déconnecter">

	</form>

</center>
<?php 

if(isset($_POST["deconnexion"]))
{
	session_destroy();
	
	session_start();
	$_SESSION["deconnexion"]= "ok";
	header('Location: index.php');
	
}


?> 

<div class="grandBloc"> 

	<div class="petitBloc">
	jhuhuh
	</div>
	
	<div class="petitBloc">
	jiji
	</div>
	
	<div class="petitBloc">
	hih
	</div>
	
	<div class="petitBloc">
	jh
	</div>
	
	<div class="petitBloc">
	huh
	</div>
	
	
<div class="petitBlocFixed">
	FIXED
	</div>
	
</div>
