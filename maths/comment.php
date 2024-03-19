<?php
$con = mysqli_connect('localhost:3306','vikram','Parjapat@123', 'coder');
if($con)
{
    echo "connection successful";
}
else{
    echo "No connection";
}                                              
mysqli_select_db($con, 'coder');

$name = $_POST['name'];
$message = $_POST['message'];

$query = "insert into commentbox (name,message) values ('$name','$message')";
mysqli_query($con,$query);
header("Location:https://www.codeavenues.com/maths/what-is-maths");
?>