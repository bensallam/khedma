<?php
//fonctions (methodes): sous programme / module réutilisable permettant de faire une tache spécifique 
//connexion db
function connecter_db()
{
$cnx = new PDO('mysql:host=localhost;dbname=khedma_db',"root", "");
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
return $cnx;
}
function intero($value)
{
	return '?';
}
function ajouter($table,$data)
{
	try{
	$cles=join(',', array_keys($data));//nom,prix
	$valeurs= array_values($data);// array(hp,5000)
	$intero=join(',', array_map("intero",$data));//?,?
	$sql="insert into $table ($cles) values ($intero)";
	//echo "$sql";
	//connexion db
	$cnx=connecter_db();
		//prepare une requete (SQL)
	$rp=$cnx->prepare($sql);
		//executer la requete 
	$rp->execute($valeurs);
	return $cnx->lastInsertId();
}catch(PDOException $e){
	die("erreur ajout de $table ".$e->getMessage());
}
	/*$idcandidatreq = $cnx->query("SELECT max(candidat_id) as lastcandidat from $table");
    $idcandidat = $idcandidatreq ->fetch();
    $idcandidatreq->closecursor();
    header("location:register2.php?lastcandidat=".$idcandidat['lastcandidat']."");*/
}
//ajout générique
//ajout générique
function check($email,$mp)
{
	$cnx=connecter_db();
	$rp=$cnx->prepare("SELECT * from candidat where email=? and mp=?");
	$rp->execute(array($email,$mp));
	$data=$rp->fetch();
	if(empty($data)){
		header("location:login.php?cn=no");
		die();
	}else{
		session_regenerate_id();	
		$_SESSION['email']=$data['email'];
		$_SESSION['mp']=$data['mp'];
		$_SESSION['candidat_id']=$data['candidat_id'];
		$_SESSION['droit']=$data['droit'];
		$_SESSION['nom']=$data['nom'];
		}
}
function get_all($table)
{
	$cnx=connecter_db();
	//prepare une requete (SQL)
	$rp=$cnx->prepare("select * from $table order by candidat_id desc");
	//executer la requete
	$rp->execute();
	$data=$rp->fetchAll();
	return $data;
}
function get_by_id($id,$table)
{
	$cnx=connecter_db();
	//prepare une requete (SQL)
	$rp=$cnx->prepare("select * from $table where id=?");
	//executer la requete 
	$rp->execute(array($id));
	$data=$rp->fetch();
return $data;
}
function get_by($condition,$table)
{
	$cnx=connecter_db();
	//prepare une requete (SQL)
	$rp=$cnx->prepare("select * from $table where $condition");
	//executer la requete 
	$rp->execute(array());
	$data=$rp->fetchall();
return $data;
}

function search($nv_etude="",$experience="",$fonction="",$formation="")
{
    $cnx=connecter_db();
    //prepare une requete (SQL)
    $rp=$cnx->prepare("select candidat_id from critere  where nv_etude like '%$nv_etude%' and experience like '%$experience%' 
and fonction like '%$fonction%' and type_formation like '%$formation%'
 ");
    //executer la requete
    $rp->execute(array());
    $data=$rp->fetchall();
    return $data;
}


//$infos=$_FILES['photo'];
function charger($infos)
{$nom=$infos['name'];//ok
$fichier_temporaire=$infos['tmp_name'];//ok
$new_name= sha1( date('Y_m_d_h_i_s')."_".rand(0,9999)).$nom;
$extension=pathinfo($nom, PATHINFO_EXTENSION);
$autorises=array('jpg','jpeg','png');
$taille=$infos['size'];
if( ! in_array($extension, $autorises)){
die("ce n'est pas une image");
}
if($taille > 8000000){
die("ce fichier est trop volumineux");
}
$chemin="images/$new_name";
move_uploaded_file($fichier_temporaire,$chemin );//ok
	return $chemin;
}
?>