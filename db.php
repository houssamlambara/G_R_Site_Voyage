<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "gestion_des_reservation1";

$conn = new mysqli($host,$user,$pass,$dbname);

if(!$conn){
    echo "Connexion impossible";
}