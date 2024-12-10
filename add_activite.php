<?php
// include('') : path : lmassar dyal lfine
include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $titre = $_POST['titre'];
    $destination = $_POST['destination'];
    $prix = $_POST['prix'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $place_disponible = $_POST['place_disponible'];
echo $titre . $destination . $prix . $date_debut . $date_fin . $place_disponible;

$sql = "INSERT INTO `activites`(`TITRE`,`DESTINATION`,`PRIX`,`DATE_DEBUT`,`DATE_FIN`,`PLACE_DISPONIBLE`)VALUES('$titre','$destination','$prix','$date_debut','$date_fin','$place_disponible')";
$res = $conn->query($sql);
if(!$res){
    echo $conn->error;
}else{
    header('Location: index.php');
}}

