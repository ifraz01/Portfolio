<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname ="login";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

//start

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];                       
$Username = $_POST['username'];
$Password = $_POST['pass'];
$Confirm = $_POST['hey'];
$Date = $_POST['date'];
$Profession = $_POST['profession'];
$Address = $_POST['address'];

$sql ="INSERT INTO `login details`(`Name`, `Email`, `Phone`, `Username`, `Password`, `Confirm`, `D.O.B`, `Profession`, `Address`) VALUES ('$Name','$Email','$Phone','$Username','$Password','$Confirm','$Date','$Profession','$Address')";

$result = mysqli_query($con , $sql)
?>