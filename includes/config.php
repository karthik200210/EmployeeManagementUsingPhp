<?php
$servername ="localhost";
$username="root";
$password="";
$databasename="employee_details";

$conn= new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
    die("failed to connect with database".$conn->connect_error);
}
?>