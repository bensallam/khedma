<?php 
extract($_GET);
 ?>
<head>
  <title>Khedma - Se connecter</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body> 
  <form action="verifier.php">
    <?php if (isset($cn) && $cn=="no"): ?>
    <div class="alert alert-danger">
      Login / Mot de passe invalides
    </div>
    <?php endif ?>
    <div class="login-wrap">
    <h2>Se connecter</h2>
    <div class="form">
      <input type="text" placeholder="E-mail" name="email" />
      <input type="password" placeholder="Mot de passe" name="mp" />
      <button> Se connecter </button>
      <a href="registration.php"> <p> Vous n'etes pas encore un membre ? Créer un compte gratuitement </p></a>
    </div>
  </div>
  </form>
</body>