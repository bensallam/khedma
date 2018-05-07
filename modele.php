<?php
//fonctions (methodes): sous programme / module réutilisable permettant de faire une tache spécifique 

//connexion db
function connecter_db()
{
$cnx = new PDO('mysql:host=localhost;dbname=khedma_db',"root", ""); 
return $cnx;
}
//ajout générique
function ajouter($civilite,$nom,$prenom,$tel,$ville,$email,$mp)
{
	$cnx=connecter_db();
	//prepare une requete (SQL)
	$rp=$cnx->prepare("insert into candidat (civilite,nom,prenom,tel,ville,email,mp) values (?,?,?,?,?,?,?)");
	//executer la requete 
	$rp->execute(array($civilite,$nom,$prenom,$tel,$ville,$email,$mp));
}
$candidat_id= ajouter()
 ?>}
