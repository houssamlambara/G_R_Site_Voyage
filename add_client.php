<?php
// include('') : path : lmassar dyal lfine
include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $date_naissance = $_POST['date_naissance'];
echo $nom . $prenom . $email . $telephone . $adresse . $date_naissance;

$sql = "INSERT INTO `clients`(`NOM`,`PRENOM`,`EMAIL`,`TELEPHONE`,`ADRESSE`,`DATE_NAISSANCE`)VALUES('$nom','$prenom','$email','$telephone','$adresse','$date_naissance')";
$res = $conn->query($sql);
if(!$res){
    echo $conn->error;
}else{
    header('Location: index.php');
}}



