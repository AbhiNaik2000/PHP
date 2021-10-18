<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
include'connection.php';
retrieveCandidate();
}

function retrieveCandidate(){
global $connect;

$result=array();
$result["candidate_info"]=array();

$query="SELECT * FROM candidate;";

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
array_push($result["candidate_info"], $temp_array);	
}

$result["Success"]="1";
echo json_encode($result);
mysqli_close($connect);
}
?>