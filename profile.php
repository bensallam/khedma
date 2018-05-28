<?php 
include 'modele.php';
$nv_etude="";
$experience="";
$fonction="";
$formation="";
extract($_GET);//$id
extract($_POST);

$table='candidat';
$critere=array();


$criteres =search($nv_etude,$experience,$fonction,$formation);
//var_dump($criteres);
$crid=array();
foreach ($criteres as $c) {
$crid[]=$c['candidat_id'];
}
//var_dump($crid);

    $candidat=get_all("candidat");
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <title>Les candidats</title>
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  max-height: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
strong{
  font-size: 18px;
}
.title {
  color: grey;
  font-size: 18px;
}
p{
  text-align: left;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
button:hover{
  opacity: 0.7;
}
</style>
</head>
  <?php include 'complement/head.php'; ?>
  <body>  
    <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <?php include 'complement/header.php'; ?>
          <!-- Header Section End -->    
          <div class="search-container">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1>Trouver un candidat pour votre besoin</h1> <br> <br>
                  <div class="content">
                    <form method="" action="">
                      <div class="row">
                        <div class="col-md-2 col-sm-6">
                          <div class="form-group">
                            <div class="search-category-container">
                              <label class="styled-select">
                                <select class="dropdown-product selectpicker" name="Niveau d'étude">
                                  <option value="Qualifiant">Qualifiant</option>
                                  <option value="Niveau Bac">Niveau Bac</option>
                                  <option value="Bac">Bac</option>
                                  <option value="Bac +2">Bac +2</option>
                                  <option value="Bac +3">Bac +3</option>
                                  <option value="Bac +4">Bac +4</option>
                                  <option value="Bac +5">Bac +5</option>
                                </select>
                              </label>
                            </div>
                              <!--                        
                            <input class="form-control" type="text" placeholder="job title / keywords / company name">
                            <i class="ti-time"></i> 
                              -->
                          </div>
                        </div>
                            <div class="col-md-3 col-sm-6">
                              <label class="styled-select">
                                <select class="dropdown-product selectpicker" name="Fonction">
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
                              </label>
                              <!--<div class="form-group">
                                <input class="form-control" type="email" placeholder="city / province / zip code">
                                <i class="ti-location-pin"></i>
                              </div>-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="search-category-container">
                                <label class="styled-select">
                                  <select class="dropdown-product selectpicker" name="Experience">
                                    <option value="Entre 0 et 6 mois">Entre 0 et 6 mois</option>
                                    <option value="Entre 6 et 12 mois">Entre 6 et 12 mois</option>
                                    <option value="Entre 1 et 2 ans">Entre 1 et 2 ans</option>
                                    <option value="Plus que 2 ans">Plus que 2 ans</option>
                                  </select>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="search-category-container">
                                <label class="styled-select">
                                  <select class="dropdown-product selectpicker" name="Type de Formation">
                                    <option value="Demande d'Emploie">Emploie</option>
                                    <option value="Demande de Stage">Stage</option>
                                    <option value="Formation">Formation</option>
                                  </select>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                              <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                            </div>
                          </div>
                    </form>
              </div>
            </div>
          </div>
        </section>
    </div>
  <?php
  include 'complement/head.php';

  ?>
  <br>
<?php foreach ($candidat as $c):?>
    <?php  if (in_array($c['candidat_id'] ,$crid) ) ?>
  <div class="container">
    <div class="card">
      <img src="<?php echo $c['photo']?>" class="img-circle" width="200"  height="200">
      <h1><?php echo $c['nom']." ".$c['prenom']?></h1>
      <p class="title"><strong> À Propos de moi:</strong> <?php echo $c['apropos']?></p>
      <p><strong> Ville:</strong> <?php echo $c['ville']?></p>
      <?php $critere=get_by("candidat_id=".$c['candidat_id'], "critere");
      $cr=$critere[0];?>
      <p><strong> Niveau d'Etude:</strong> <?php echo $cr['nv_etude']?></p>
      <p><strong> Fonction:</strong> <?php echo $cr['fonction']?></p>
      <p><strong> Experience:</strong> <?php echo $cr['experience']?></p>
      <p><button href="resume.php?id=<?php echo $c['candidat_id'];?>">Consulter</button></p>
    </div>
<?php endforeach ?>
  </div>
  <br> <br> <br> <br> <br> 
    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>© 2018 - Khed.ma Tous droits réservés, MADE WITH HOPE</p>
              </div>   
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->
    </footer>
    <!-- Footer Section End -->  
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>    
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>    
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
  </body>
</html>