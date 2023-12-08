<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$eml = $_POST['email'];
$phnum = $_POST['pnum'];
$medcard = $_POST['medcard'];
$appdate = $_POST['appdate'];

include("dbcon.php");

$sql = "insert into appointments(firstname,surname,dateofbirth,email,phonenumber,medicalcard,apointmentdate)
VALUES ('$fn', '$sn', '$dob', '$eml', '$phnum', '$medcard', '$appdate')";

mysqli_query($conn,$sql);
mysqli_close($conn);

echo "Appointment made!";

?>