<?php
include "connectDatabase.php";
// initialize variables for the insert query
$id = 1;
$phone = '333-555-4444';
// prepare the insert query
$phone = mysqli_real_escape_string($connectSQL,$phone);
$query = "UPDATE employee SET phone = '".$phone."' WHERE id = '".(int)$id."'";
//run the insert query
mysqli_query($connectSQL,$query);
//close the db connection
mysqli_close($connectSQL);



?>