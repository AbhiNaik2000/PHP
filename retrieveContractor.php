<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
include'connection.php';
retrieveContractor();
}

function retrieveContractor(){
global $connect;

$result=array();
$result["contractor_info"]=array();

$query="SELECT * FROM contractor;";

$responce=mysqli_query($connect,$query);

while($row=mysqli_fetch_array($responce)){
$temp_array["id"]=$row["0"];
$temp_array["image"]=$row["1"];
$temp_array["first_name"]=$row["2"];
$temp_array["last_name"]=$row["3"];
$temp_array["phone_number"]=$row["4"];
$temp_array["location"]=$row["5"];
$temp_array["date"]=$row["6"];
$temp_array["time"]=$row["7"];
$temp_array["company_name"]=$row["8"];
$temp_array["service"]=$row["9"];
array_push($result["contractor_info"], $temp_array);	
}

$result["Success"]="1";
echo json_encode($result);
mysqli_close($connect);
}
?>