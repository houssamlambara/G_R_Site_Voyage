<?php
// include('') : path : lmassar dyal lfine
include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $titre = $mysqli -> real_escape_string ($_POST['titre']);
    $destination = $mysqli -> real_escape_string ($_POST['destination']);
    $prix = $mysqli -> real_escape_string ($_POST['prix']);
    $date_debut = $mysqli -> real_escape_string ($_POST['date_debut']);
    $date_fin = $mysqli -> real_escape_string ($_POST['date_fin']);
    $place_disponible = $mysqli -> real_escape_string ($_POST['place_disponible']);
echo $titre . $destination . $prix . $date_debut . $date_fin . $place_disponible;

$sql = "INSERT INTO `activites`(`TITRE`,`DESTINATION`,`PRIX`,`DATE_DEBUT`,`DATE_FIN`,`PLACE_DISPONIBLE`)VALUES('$titre','$destination','$prix','$date_debut','$date_fin','$place_disponible')";
$res = $conn->query($sql);
if(!$res){
    echo $conn->error;
}else{
    header('Location: index.php');
}}

