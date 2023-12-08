<?php


include("dbcon.php");

$sql = "select * from appointments";

$result = mysqli_query($conn,$sql);
echo "<TABLE border= '1'>";
while ($row=mysqli_fetch_assoc($result)) {
    $fn = $row['firstname'];
    $sn = $row['surname'];
    $dob = $row['dateofbirth'];
    $eml = $row['email'];
    $phnum = $row['phonenumber'];
    $medcard = $row['medicalcard'];
    $appdate =$row['apointmentdate'];

    echo "<TR><TD>$fn</TD> <TD>$sn</TD> <TD>$dob</TD> <TD>$eml</TD> <TD>$phnum</TD> <TD>$medcard</TD> <TD>$appdate</TD></TR>";
    
}
echo "</TABLE>";
mysqli_close($conn);



?>