<?php
include "connectDatabase.php";
// --------------insert data to table start------------------
// initialize variables for the insert query
$name='John Smith';
$email='tuananhkbhb@yahoo.com.vn';
$phone = '0369111314';
// prepare the insert query
$name = mysqli_real_escape_string($connectSQL,$name);
$email = mysqli_real_escape_string($connectSQL,$email);
$phone = mysqli_real_escape_string($connectSQL,$phone);
$query = "INSERT INTO  employee(name,email,phone) 
VALUES ('".$name."','" .$email. "','" .$phone."')";
var_dump($query);
// run the insert query
mysqli_query($connectSQL, $query);
// close the db connection
mysqli_close($connectSQL);
//---------insert data to table end----------------
?>