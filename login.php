<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
include'connection.php';
loginUser();
}

function loginUser(){
global $connect;

$Username=$_POST["username"];
$Password=$_POST["password"];

$query="SELECT * FROM user WHERE username='$Username' AND password='$Password';";

$result=mysqli_query($connect,$query);
$no_of_row=mysqli_num_rows($result);

if($no_of_row>0){
echo "Successfully";	
}
if($no_of_row==0){
echo "Unsuccessfully";
}

mysqli_close($connect);
}
?>