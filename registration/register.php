<?php 
include '../modele.php';
extract($_POST);

if (isset($civilite
)) {
  ajouter($civilite,$nom,$prenom,$tel,$ville,$email,$mp);
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inscription</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <form class="form-horizontal" action="register.php" method="POST">
<fieldset>
<!-- Form Name -->
<legend>INSCRIPTION</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="civilite">Civilité :</label>
  <div class="col-md-4">
    <select id="selectbasic" class="form-control" name="civilite">
      <option value="Monsieur">Monsieur</option>
      <option value="Madame">Madame</option>
      <option value="Mademoiselle">Mademoiselle</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom :</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" placeholder="" class="form-control input-md" required="" type="text" name="nom">  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prénom :</label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" placeholder="" class="form-control input-md" required="" type="text" name="prenom">    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Tel :</label>  
  <div class="col-md-4">
  <input id="tel" name="tel" placeholder="" class="form-control input-md" required="" type="text" name="tel">   
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email :</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="exemple@email.com" class="form-control input-md" required="" type="text" name="email">
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mp">Mot de Passe :</label>
  <div class="col-md-4">
    <input id="mp" name="mp" placeholder="" class="form-control input-md" required="" type="password" name="mp">
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville :</label>
  <div class="col-md-4">
    <select id="selectbasic" class="form-control" name="ville">
      <option value="AL HAJEB">AL HAJEB</option>
      <option value="AGADIR">AGADIR</option>
      <option value="AL HOCEIMA">AL HOCEIMA</option>
      <option value="ASSA ZAG">ASSA ZAG</option>
      <option value="AZILAL">AZILAL</option>
      <option value="BENI MELLAL">BENI MELLAL</option>
      <option value="BENSLIMANE">BENSLIMANE</option>
      <option value="BOUJDOUR">BOUJDOUR</option>
      <option value="BOULEMANE">BOULEMANE</option>
      <option value="BERRECHID">BERRECHID</option>
      <option value="CASABLANCA">CASABLANCA</option>
      <option value="CHEFCHAOUEN">CHEFCHAOUEN</option>
      <option value="CHTOUKA AIT BAHA">CHTOUKA AIT BAHA</option>
      <option value="CHICHAOUA">CHICHAOUA</option>
      <option value="EL JADIDA">EL JADIDA</option>
      <option value="EL KELAA DES SRAGHNAS">EL KELAA DES SRAGHNAS</option>
      <option value="ERRACHIDIA">ERRACHIDIA</option>
      <option value="ESSAOUIRA">ESSAOUIRA</option>
      <option value="ES SEMARA">ES SEMARA</option>
      <option value="FES">FES</option>
      <option value="FIGUIG">FIGUIG</option>
      <option value="GUELMIM">GUELMIM</option>
      <option value="IFRANE">IFRANE</option>
      <option value="KENITRA">KENITRA</option>
      <option value="KHEMISSET">KHEMISSET</option>
      <option value="KHENIFRA">KHENIFRA</option>
      <option value="KHOURIBGA">KHOURIBGA</option>
      <option value="LAAYOUNE">LAAYOUNE</option>
      <option value="LARACHE">LARACHE</option>
      <option value="MOHAMMEDIA">MOHAMMEDIA</option>
      <option value="MARRAKECH">MARRAKECH</option>
      <option value="MEKNES">MEKNES</option>
      <option value="NADOR">NADOR</option>
      <option value="OUARZAZATE">OUARZAZATE</option>
      <option value="OUJDA">OUJDA</option>
      <option value="OUED EDDAHAB">OUED EDDAHAB</option>
      <option value="RABAT">RABAT</option>
      <option value="SALE">SALE</option>
      <option value="SKHIRAT TEMARA">SKHIRAT TEMARA</option>
      <option value="SEFROU">SEFROU</option>
      <option value="SAFI">SAFI</option>
      <option value="SETTAT">SETTAT</option>
      <option value="SIDI KACEM">SIDI KACEM</option>
      <option value="TANGER">TANGER</option>
      <option value="TAN TAN">TAN TAN</option>
      <option value="TAOUNAT">TAOUNAT</option>
      <option value="TAROUDANNT">TAROUDANNT</option>
      <option value="TATA">TATA</option>
      <option value="TAZA">TAZA</option>
      <option value="TETOUAN">TETOUAN</option>
      <option value="TIZNIT">TIZNIT</option>
    </select>
  </div>
</div>
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
    <button id="btninscrir" name="inscrir" class="btn btn-success" value="inscrir">S'inscrir</button>
  </div>
</div>
</fieldset>
</form>
</body>
</html>