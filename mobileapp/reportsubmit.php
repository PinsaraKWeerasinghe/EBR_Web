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



$_query="INSERT INTO incident VALUES ('','$userid','$location','$methodofReport','$comment','$state','$lat','$lng','$img_name','$encode_str')";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>