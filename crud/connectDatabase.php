<?php 
//connect database
$connectSQL = mysqli_connect("127.0.0.1","root","");
if(!$connectSQL){
	echo "Error No: " . mysqli_connect_errno();
	echo "Error Description: " . mysqli_connect_error();
	exit;
}
//select databse
mysqli_select_db($connectSQL,"tuananh");
?>