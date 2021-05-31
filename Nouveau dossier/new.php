<?php
	var_dump($_POST);

	// Verifie si Toto et Tata sont renseignés //
	if(isset($_POST["toto"]) && isset($_POST["tata"])){
		echo "ouvrir toto et tata";
	}

	// Sinon, si il n'y a que toto ou tata de côché
	else if(isset($_POST["toto"]) || isset($_POST["tata"])){
		
		echo "ouvrir ";

		// Si c'est toto //
		if(isset($_POST["toto"])){
			echo "toto";
		}

		// Si c'est tata //
		else{
			echo "tata";
		}
	}

	//Sinon, aucune case n'a été côchée //
	else{
		echo "Aucun des deux n'a été côché";
	}
?>