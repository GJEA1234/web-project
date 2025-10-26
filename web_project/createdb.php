<?php 
$con = mysqli_connect("localhost","root",""); 
if (!$con) 
{ 
   die('Could not connect: ' . mysqli_error($con)); 
} 
// Create database 
        if (mysqli_query($con, "CREATE DATABASE collage_db")) 
{ 
    echo "Database created";
} 
else 
{ 
echo "Error creating database: " . mysqli_error($con); 
} 
// Create table 
mysqli_select_db($con ,"collage_db"); 
$sql = "CREATE TABLE persons 
( 

StudentName varchar(50), 
DateOfBirth DATE, 
Gender  varchar(15), 
NIC varchar(20),
Address varchar(50),
Phone varchar(10),
Email varchar(30),
Faculty varchar(15),
Password varchar(20)
)"; 
// Execute query 
mysqli_query($con,$sql); 
mysqli_close($con); 
?> 