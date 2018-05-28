<?php 
include 'modele.php';
extract($_POST);
if (isset($apropos) && isset($societe) && isset($nom)  && isset($prenom) && isset($tel) && isset($ville) && isset($email) && isset($mp))
{
	$id=ajouter("recruteur",array('apropos'=>$apropos,'societe'=>$societe,'nom'=>$nom,'prenom'=>$prenom,'tel'=>$tel,'ville'=>$ville,'email'=>$email,'mp'=>$mp,));
  $data=$_POST;
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    <fieldset>
      <!-- Form Name -->
      <legend>INSCRIPTION</legend>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="apropos">A propos de la societé :</label>  
        <div class="col-md-4">
        <input id="apropos" name="apropos" placeholder="" class="form-control input-md" required="" type="text">  
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="societe">Nom de la societé:</label>  
        <div class="col-md-4">
        <input id="societe" name="societe" placeholder="" class="form-control input-md" required="" type="text">  
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nom">Nom :</label>  
        <div class="col-md-4">
        <input id="nom" name="nom" placeholder="" class="form-control input-md" required="" type="text">  
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenom">Prénom :</label>  
        <div class="col-md-4">
        <input id="prenom" name="prenom" placeholder="" class="form-control input-md" required="" type="text">    
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tel">Tel :</label>  
        <div class="col-md-4">
        <input id="tel" name="tel" placeholder="" class="form-control input-md" required="" type="text">   
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email :</label>  
        <div class="col-md-4">
        <input id="email" name="email" placeholder="exemple@email.com" class="form-control input-md" required="" type="email">
        </div>
      </div>
      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="mp">Mot de Passe :</label>
        <div class="col-md-4">
          <input id="mp" name="mp" placeholder="" class="form-control input-md" required="" type="password">
        </div>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="ville">Ville :</label>
        <div class="col-md-4">
          <select id="selectbasic" class="form-control" name="ville" required >
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