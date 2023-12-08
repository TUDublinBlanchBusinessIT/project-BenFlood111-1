<?php

include("dbcon.php");

$sql = "SELECT id, Item, Price FROM mainsmenu";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["id"] . "'>" . $row["Item"] . " - $" . $row["price"] . "</option>";
}

?>