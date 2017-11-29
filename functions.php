<?php 

function UserExiste($login , $password)
{	
	
	if (($handle = fopen("user.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000 , ";")) !== FALSE) 
		{
			
			if($data[0] == $login && $data[1] == $password) 
			{
				
				return true;
				
			}
			
			
		}
		
	return true;

	fclose($handle);
		
	}


}