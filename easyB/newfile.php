<?php

$link = new mysqli("localhost", "root", "", "SYSGESCO");


if(!$link->connect_errno)
{
	Echo'Connection Impossible';
	exit();
}


//Ecriture de la requete
$requete = "SELECT * FROM Etudiant;";

if($reponse=mysqli->query($requete)) {
	
	printf("Nombre de resultats trouvés : \n", $reponse->num_rows);
}



?>
