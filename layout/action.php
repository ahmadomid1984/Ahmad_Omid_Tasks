<?php include "header.php"; 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['bdate'];
$color = $_POST['color'];


echo "<h3> Your name is $fname $lname </h3>";
echo "<h3> Your favourite color is $color </h3>";
echo "<h3> Your date of birth is $dob </h3>";



?>





<?php include "footer.php" ?>