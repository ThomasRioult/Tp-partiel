<?php
$server = "localhost";
$user = "root";
$pass = "root";
$database = "tp-partiel2";

$ajouter = mysqli_connect($server, $user, $pass, $database);

if (!$ajouter) {
    die("Erreur");
}

   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS

?>
  
