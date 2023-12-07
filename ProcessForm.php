<?php

include("dbcon.php")

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mains_id = $_POST["mains_id"];
    $desserts_id = $_POST["desserts_id"];
    $drinks_id = $_POST["drinks_id"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $adressLine1 = $_POST["adressLine1"];
    $adressLine2 = $_POST["adressLine2"];

    


?>