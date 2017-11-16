<?php

$message = $_POST['message'];

if (strpos($message, 'kanker') !== false) {
    $cleanMessage = str_replace("kanker","******",$message);
} else if (strpos($message, 'aids') !== false) {
    $cleanMessage = str_replace("aids","****",$message);
} else if (strpos($message, 'kut') !== false) {
    $cleanMessage = str_replace("kut","***",$message);
} else if (strpos($message, 'homo') !== false) {
    $cleanMessage = str_replace("homo","****",$message);
} else if (strpos($message, 'gay') !== false) {
    $cleanMessage = str_replace("gay","***",$message);
}

$dbc = new PDO('mysql:host=localhost;dbname=gastenboek','root','');

$stmt = $dbc->prepare("INSERT INTO berichten VALUES (:id, :naam, :message)");

$stmt->bindParam(':id',$id);
$stmt->bindParam(':naam',$naam);
$stmt->bindParam(':message',$bericht);

$id = $dbc->lastInsertId();
$naam = $_POST['name'];
$bericht = $cleanMessage;

$stmt->execute() or die('Error querying after PDO');

header('Location: index.php');