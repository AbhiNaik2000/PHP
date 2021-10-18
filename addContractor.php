<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
require'connection.php';
contractor();
}

function contractor(){
global $connect;

$TargetDir="Images/";
$Image=$_POST["imageView"];
$ImageStore=rand()."_".time().".jpeg";
$TargetDir=$TargetDir."/".$ImageStore;
file_put_contents($TargetDir, base64_decode($Image));
$FirstName=$_POST["firstName"];
$LastName=$_POST["lastName"];
$Phone=$_POST["phone"];
$Location=$_POST["location"];
$CompanyName=$_POST["companyName"];
$Service=$_POST["service"];

$query="INSERT INTO contractor(image,first_name,last_name,phone_number,location,date,time,company_name,service) VALUES('$ImageStore','$FirstName','$LastName','$Phone','$Location',now(),now(),'$CompanyName','$Service');";

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