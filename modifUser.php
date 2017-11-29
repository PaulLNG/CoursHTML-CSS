<h1> Modification d'un utilisateur </h1>

<?php

session_start();
?>

<form name="modif" method="post">

	<input name="login" type="text" >
	<input name="password" type="text">
	<input name="modification" type="submit" value="Modifier">
	
</form>

<?php 

if(isset($_POST["modification"]))
{

	$numLigne = $_GET["ligne"];
	
	$i = 1;
    $array_tmp = array();
    $fileUser = fopen("user.csv", "r");
    
    while (($data = fgetcsv($fileUser ,  1000 , ";")) !== FALSE) {
        $ligne_tmp = array();
        if ($i !== intval($_GET['ligne'])){
            $ligne_tmp[0] = $data[0];
            $ligne_tmp[1] = $data[1];
            $array_tmp[$i-1] = $ligne_tmp;
        }
        $i++;
    }
    $array_tmp[] = array($_POST['login'], $_POST['password']);

    $fileUser = fopen('user.csv','w+');
    
	foreach ($array_tmp as $ligne)
	{
        fputcsv($fileUser,$ligne,";");
    }
	
	fclose($fileUser);	
	


}

?> 
<a href="profil.php"> <button> Retour </button> </a>