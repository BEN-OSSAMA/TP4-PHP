<?php
// index_1.php

require_once 'Client.php';

echo"<h1>index_1.php</h1>";

$client1 = new Client(1, "ossama ben kacem", "rue Mohamed V Fnideq");
$client1->afficherInfos();
echo "<br/>";

$client2 = new Client(2, "root", "rue Mohamed V Fnideq");
$client2->afficherInfos();
echo "<br/>";

$client3 = new Client(3, "admin", "rue Mohamed V Fnideq");
$client3->afficherInfos();
echo "<br/>";

echo "Nombre d'utilisateurs : " . Client::getNbrUser() . "<br>";
echo "<br>";

// unset($client2);

echo "Nombre d'utilisateurs avant destruction : " . Client::getNbrUser() . "<br>";
?>