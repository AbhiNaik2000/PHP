<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
include'connection.php';
removeClient();
}

function removeClient(){
global $connect;

$id=$_POST["id"];

$query="DELETE FROM client WHERE id='$id';";

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