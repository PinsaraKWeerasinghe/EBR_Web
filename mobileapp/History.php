<?php

$mysql_host="localhost";
$mysql_user="root";


$username=$_POST["uname"];


$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    //echo "Connection Error".mysqli_connect_error();
}else{
    //echo "Connected successfully...<br>";
}

$_query="SELECT incident_id,dates,insident_type,state FROM incident WHERE user_name='$username'";

$is_query_run=mysqli_query($con,$_query);
$json_array=array();

while($query_execute=mysqli_fetch_assoc($is_query_run)){
    $json_array[]=$query_execute;
}
mysqli_close($con);


echo json_encode($json_array);


?>