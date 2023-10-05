<?php
include "/connection.php";

//retriving data from the form
$salutation = $_POST['salutation'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dateOfBirth = $_POST['date'];
$gender = $_POST['gender'];
$address = $_POST['Address'];
$qualifications = $_POST['Address']; // You might want to fix this, it seems to be a mistake
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$userName = $_POST['user_name'];
$password = $_POST['password'];

// SQL query to insert data into the database
$sql = "INSERT INTO employees (salutation, first_name, last_name, email, phone, date_of_birth, gender, address, qualifications, country, state, city, pincode, user_name, password) 
        VALUES ('$salutation', '$firstName', '$lastName', '$email', '$phone', '$dateOfBirth', '$gender', '$address', '$qualifications', '$country', '$state', '$city', '$pincode', '$userName', '$password')";

if ($link->query($sql) === TRUE) {
    echo "Employee added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

// Close the database connection
$conn->close();






?>