<?php
include "connectDatabase.php";
// prepare the select query
$querry = "SELECT * FROM employee";
// execute the select query
$result = mysqli_query($connectSQL,$querry) or die (mysqli_error($connectSQL));
//run the select query
while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    echo "ID:" .$row['id'] . "<br/>";
    echo "NAME:" .$row['name'] . "<br/>";
    echo "Phone:" .$row['phone'] . "<br/>";
    echo "Email:" .$row['email'] . "<br/>";
    echo "<br/>";
}
//close the db connection
mysqli_close($connectSQL);


?>