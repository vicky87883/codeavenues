<?php

$server = "localhost:3306";
$user = "vikram";
$password = "Parjapat@123";
$db = "frontpage";

$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
// echo "Connection Successful";
}else{
echo "No connection";
}

?>