<?php 
$con = mysqli_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysqli_connect_error($con)); 
} 
mysqli_select_db($con, "collage_db");

mysqli_select_db($con , "collage_db");
$sql="INSERT INTO persons (StudentName, DateOfBirth , Gender , NIC  ,Address ,Phone ,Email ,Faculty,Password ) 
VALUES 
('$_POST[name]','$_POST[bd]','$_POST[gender]','$_POST[nic]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[faculty]','$_POST[pw]' )"; 
if (!mysqli_query($con, $sql)) 
{ 
die('Error: ' . mysqli_error($con)); 
} 
echo "Your registration is successful...!"; 
mysqli_close($con) ;
?>