<?php
session_start();
$server='localhost';
$user='root';
$password='sample';
$db='sample';
$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn) {
echo "no connnexn";
}
else {
;
}

$sql ="CREATE TABLE signupreg(
id INT(3) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(70) NOT NULL,
email_id VARCHAR(70),
password VARCHAR(30) NOT NULL,
phone_no VARCHAR(15))";
if (mysqli_query($conn,$sql)) {
      ;
}
else{
echo "Error creating TABLE: " . mysqli_error($conn);} 

$uname= $_POST["uname"];
$emailid = $_POST["email"];
$password = $_POST["pswd"];
$phoneno = $_POST["number"];

$sql2 = "INSERT INTO signupreg(
username,email_id,password ,phone_no) 
VALUES ('$uname','$emailid','$password','$phoneno')";
if (mysqli_query($conn,$sql2)) {
    header("location:login.html");  ;
}
else{
echo "Err inserting TABLE: " . mysqli_error($conn);} 
?>
