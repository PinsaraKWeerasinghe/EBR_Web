<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$username=$_POST["username"];
$location=$_POST["location"];
$methodofReport=$_POST["methodofReport"];
$comment=$_POST["comment"];


$img_name="test.jpg";
$encode_str=$_POST["encoded_string"];
$state="Open";

$lat=$_POST["lat"];
$lng=$_POST["lng"];

//$decoded_string=base64_decode($encode_str);
//$path='images/'.$img_name;
//$file=fopen($path,'wb');
//$is_written=fwrite($file,$decoded_string);
//fclose($file);

date_default_timezone_set("Asia/Calcutta");
$dates= date("Y:M:d");


$_query="INSERT INTO incident VALUES ('','$username','$location','$methodofReport','$comment','$state','$lat','$lng','$img_name','$encode_str','$dates')";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>