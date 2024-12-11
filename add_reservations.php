<?php
// include('') : path : lmassar dyal lfine
include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $titre = htmlspecialchars ($_POST['titre']);
    $destination = htmlspecialchars ($_POST['destination']);
    $prix = htmlspecialchars ($_POST['prix']);
    $date_debut = htmlspecialchars ($_POST['date_debut']);
    $date_fin = htmlspecialchars ($_POST['date_fin']);
    $place_disponible = htmlspecialchars ($_POST['place_disponible']);
echo $titre . $destination . $prix . $date_debut . $date_fin . $place_disponible;

$sql = "INSERT INTO `reservations`(`DATE_RESERVATION`,`STATUS`)VALUES('$titre','$destination','$prix','$date_debut','$date_fin','$place_disponible')";
$res = $conn->query($sql);
if(!$res){
    echo $conn->error;
}else{
    header('Location: index.php');
}}

