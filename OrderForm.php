<?php
session_start();
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mains_id = isset($_POST["mains_id"]) ? $_POST["mains_id"] : null;
    $desserts_id = isset($_POST["desserts_id"]) ? $_POST["desserts_id"] : null;
    $drinks_id = isset($_POST["drinks_id"]) ? $_POST["drinks_id"] : null;
    $firstName = $_POST["firstName"];
    $surName = $_POST["surName"];
    $adressLine1 = $_POST["adressLine1"];
    $adressLine2 = $_POST["adressLine2"];

    $sql = "Insert into orders (mains_id, desserts_id, drinks_id, firstName, surName, adressLine1, adressLine2)
    values ('$mains_id', '$desserts_id', '$drinks_id', '$firstName', '$surName', '$adressLine1', '$adressLine2')";

    if (mysqli_query($conn, $sql)) {
        echo "Order successfully placed";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
    }


?>

$mains_id = $_POST["mains_id"];
    $desserts_id = $_POST["desserts_id"];
    $drinks_id = $_POST["drinks_id"];
    $firstName = $_POST["firstName"];
    $surName = $_POST["surName"];
    $adressLine1 = $_POST["adressLine1"];
    $adressLine2 = $_POST["adressLine2"];