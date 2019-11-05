<?php
include "connectDatabase.php";
// initialize variables for the delete query
$id=1;
//prepare the insert query
$query = "DELETE FROM employee WHERE id = '".(int) $id."'";
//run the delete query
mysqli_query($connectSQL,$query);
//close the db connection
mysqli_close($connectSQL);
?>