<?php 
//vérifier le nom

require('../classes/verification.php');

$verif = new Verification();

$verif->Texte($_POST['nom'], 'nom');
//Vérifier le prenom
$verif->Texte($_POST['prenom'], 'prenom');
//Vérifier l'émail et vérifier en base de donnée s'il l'existe
$verif->Email($_POST['email']);
//Vérifier le téléphone
$verif->Phone($_POST['telephone']);
//vérifie le mot de passe
//vérifie le mot de passe et qu'il est identique
$verif->Password($_POST['password'], $_POST['password2'] );

?>