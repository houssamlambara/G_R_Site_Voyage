<?php
// include('') : path : lmassar dyal lfine
include('db.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id_clt = htmlspecialchars ($_POST['client']);
    $id_act = htmlspecialchars ($_POST['activite']);
    // $prix = htmlspecialchars ($_POST['date']);
    $st = htmlspecialchars ($_POST['status']);

$sql = "INSERT INTO reservations ( `ID_client`, `ID_activite`, `date_reservation`, `status`) VALUES ( '$id_clt', '$id_act' , current_timestamp(),'$st')  ;";
$res = $conn->query($sql);
if(!$res){
    echo $conn->error;
}else{
    header('Location: reservations tableau.php');
}}


