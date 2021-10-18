<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
require'connection.php';
registerUser();
}

function registerUser(){
global $connect;

$Username=$_POST["username"];
$Password=$_POST["password"];
$Email=$_POST["email"];
$Phone=$_POST["phone"];

$query="INSERT INTO user(username,password,email,phone_number) VALUES('$Username','$Password','$Email','$Phone');";

$result=mysqli_query($connect,$query);
$no_of_row=mysqli_affected_rows($connect);

if($no_of_row>0){
echo "Successfully";	
}
if($no_of_row==0){
echo "Unsuccessfully";
}

mysqli_close($connect);
}
?>