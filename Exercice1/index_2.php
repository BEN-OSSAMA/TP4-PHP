<?php


require_once 'Client.php';

echo"<h1>index_2.php</h1>";
$client1 = Client::getInstance(1, "ossama ben kacem", "rue Mohamed V Fnideq");
$client1->afficherInfos();
echo "<br/>";

$client2 = Client::getInstance(2, "root", "rue Mohamed V Fnideq");
$client2->afficherInfos();
echo "<br/>";

echo "Nombre d'utilisateurs : " . Client::getNbrUser() . "<br>";
echo "<br>";

if ($client1 === $client2) {
    echo "Les deux variables pointent vers la même instance de Client.<br>";
} else {
    echo "Les deux variables pointent vers des instances différentes de Client.<br>";
}
?>