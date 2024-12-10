<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "gestion_des_reservation";

$conn = new mysqli($host,$user,$pass,$dbname);

if(!$conn){
    echo "3Ndk mochkil";
}