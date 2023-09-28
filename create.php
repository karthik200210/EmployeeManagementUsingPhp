<?php
include "./includes/config.php";

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password - $_POST['password'];
}
$sql = "INSERT INTO 'employee_details_table(
    'firstname',
    'lastname',
    'phone',
    'email',
    'dob',
    'address',
    'qualifiaction',
    'country',
    'state',
    'city',
    'gender',
    'username',
    'password'
    )
    VALUES(
    '$firstname',
    '$lastname',
    '$phone',
     '$email',
     '$dob'
     ' $address'
    ' $qualification'
    ' $country'
   ' $state'
    ' $city'
    ' $gender'
    ' $username'
     ' $password')";
    
$newEmployee=$conn->query($sql);

if($newEmployee==true)
{
    echo "New employee added succesfully";
}
else{
    echo "Error in adding new employeee".$conn->error;

}
$conn->close();

?>