<?php


require_once 'Particulier.php';
require_once 'Entreprise.php';

echo "<h1>Exercice 2</h1>";
echo "<h2>Test des classes Particulier et Entreprise</h2>";
echo"<br><h2>Particulier</h2><br>";
$particulier = new Particulier(1, "OUSSAMA BEN KACEM", "rue Mohamed VI , Fnideq");
echo $particulier; 
$particulier->payerFacture();
$particulier->reclamation();
echo "<br>";

echo"<br><h2>Entreprise</h2><br>";

$entreprise = new Entreprise(2, "Tech Corp", "456 Avenue de Lyon", "123456", "SARL", "Informatique");
echo $entreprise; 
$entreprise->payerFacture();
$entreprise->reclamation();
echo "<br>";

echo"<hr/>";
echo "Nombre d'utilisateurs : " . Client::getNbrUser() . "<br>";
?>