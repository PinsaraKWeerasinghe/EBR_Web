<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$userid=$_POST["userID"];
$location=$_POST["location"];
$methodofReport=$_POST["methodofReport"];
$comment=$_POST["comment"];
$state="Open";


$_query="INSERT INTO incident VALUES ('','$userid','$location','$methodofReport','$comment','$state')"; 

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>