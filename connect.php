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

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$linkedin = $_POST['linkedin'];
$subject = $_POST['subject'];
$interest = $_POST['interest'];
$message = $_POST['message'];

$query = "insert into contact (fullname,email,mobile,linkedin,subject,interest,message) values ('$fullname','$email','$mobile','$linkedin','$subject','$interest','$message')";
mysqli_query($con,$query);
header("Location:https://www.codeavenues.com/");
?>