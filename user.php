<?php session_start();
include 'modele.php';
$groupe=array('admin');
check($_SESSION['email'],$_SESSION['mp']);
if(!in_array($_SESSION['droit'],$groupe)){
header('location:login.php?droit=no');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bonjour</title>
</head>
<body>
	<h1>BONJOUR USER</h1>
</body>
</html>