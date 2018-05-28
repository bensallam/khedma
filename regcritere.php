<?php include 'modele.php';
extract($_POST);
extract($_GET);
if (isset($nv_etude) && isset($fonction)  && isset($experience) && isset($type_formation))
{
  ajouter("critere",array('nv_etude'=>$nv_etude,'fonction'=>$fonction,'experience'=>$experience,'type_formation'=>$type_formation,'candidat_id'=>$candidat_id));
  $data=$_POST;
  header("location:login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inscription</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <form class="form-horizontal" action="" method="POST">
<fieldset>
<!-- Form Name -->
<legend>INSCRIPTION</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nv_etude">Niveau d'étude :</label>
  <div class="col-md-4">
    <select id="nv_etude" name="nv_etude" class="form-control">
      <option value="Qualifiant">Qualifiant</option>
      <option value="Niveau Bac">Niveau Bac</option>
      <option value="Bac">Bac</option>
      <option value="Bac +2">Bac +2</option>
      <option value="Bac +3">Bac +3</option>
      <option value="Bac +4">Bac +4</option>
      <option value="Bac +5">Bac +5</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="fonction">Fonction</label>
  <div class="col-md-4">
    <select id="fonction" name="fonction" class="form-control">
      <option value="Comptabilité / Audit">Comptabilité / Audit</option>
      <option value="Relation Publiques">Relation Publiques</option>
      <option value="Assurance">Assurance</option>
      <option value="Agriculture">Agriculture</option>
      <option value="Architecture">Architecture</option>
      <option value="Informatique">Informatique</option>
      <option value="Immobilier">Immobilier</option>
      <option value="Banque / Finance">Banque / Finance</option>
      <option value="Education">Education</option>
      <option value="Sport / Divertissement">Sport / Divertissement</option>
      <option value="Publication / Impression">Publication / Impression</option>
      <option value="Industrie">Industrie</option>
      <option value="Transport / Logistique">Transport / Logistique</option>
      <option value="Tourisme / Restauration">Tourisme / Restauration</option>
      <option value="Télécommunication">Télécommunication</option>
      <option value="RH">RH</option>
      <option value="Autre...">Autre...</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="experience">Expérience :</label>
  <div class="col-md-4">
    <select id="experience" name="experience" class="form-control">
      <option value="Entre 0 et 6 mois">Entre 0 et 6 mois</option>
      <option value="Entre 6 et 12 mois">Entre 6 et 12 mois</option>
      <option value="Entre 1 et 2 ans">Entre 1 et 2 ans</option>
      <option value="Plus que 2 ans">Plus que 2 ans</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="typeformation">Type de Formation :</label>
  <div class="col-md-4">
    <select id="typeformation" name="type_formation" class="form-control">
      <option value="Demande d'Emploie">Demande d'Emploie</option>
      <option value="Demande de Stage">Demande de Stage</option>
      <option value="Formation">Formation</option>
    </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btninscrir"></label>
  <div class="col-md-4">
  	<form action="">
  		<button id="btninscrir" name="inscrir" class="btn btn-success" value="inscrir" >S'inscrir</button>
  	</form>
  </div>
</div>
</fieldset>
</form>
</body>
</html>