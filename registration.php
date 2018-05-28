<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Inscription - Khedma</title>
</head>
<body>
    <?php 
  include 'complement/head.php';
  include 'complement/header.php';
   ?>
  <style>
  .f{
    display: flex;
    height: 100vh;
    text-align: center;
  }
  .f a img{
    display: block;
    width: 300px;
  }

  </style>
<div class="container f">
  <div class="row div_margin" style="margin: auto;">
      <div class="col-sm-6 col-xs-12 cut_box1" id="choose">
       <a href="http://localhost/kassimi/regcandidat.php" class="candidatreg">
    
          <img src="images/regcandidat.png" alt="" class="img-responsive">
          <p class="rouded_text alert alert-info">Candidat</p> </a>
        
      </div>
   
      <div class="col-sm-6 col-xs-12 cut_box2" id="choose">
       
        <a href="http://localhost/kassimi/regrecruteur.php" class="companyreg">
      <img src="images/regcompany.png" alt="" class="img-responsive">
          <p class="rouded_text alert alert-info">Entreprise</p>    
        </a>
      
      </div>
  </div>
</div>
</body>
</html>