<?php
// include('') : path : lmassar dyal lfine
include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nom = $mysqli -> real_escape_string ($_POST['nom']);
    $prenom = $mysqli -> real_escape_string ($_POST['prenom']);
    $email = $mysqli -> real_escape_string ($_POST['email']);
    $telephone = $mysqli -> real_escape_string ($_POST['telephone']);
    $adresse = $mysqli -> real_escape_string ($_POST['adresse']);
    $date_naissance = $mysqli -> real_escape_string ($_POST['date_naissance']);
echo $nom . $prenom . $email . $telephone . $adresse . $date_naissance;

$sql = "INSERT INTO `clients`(`NOM`,`PRENOM`,`EMAIL`,`TELEPHONE`,`ADRESSE`,`DATE_NAISSANCE`)VALUES('$nom','$prenom','$email','$telephone','$adresse','$date_naissance')";
$res = $conn->query($sql);
if(!$res){
    echo $conn->error;
}else{
    header('Location: index.php');
}}



