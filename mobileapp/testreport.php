<?php
//$mysql_host="localhost";
//$mysql_user="root";
//
//$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");
//
//if (!$con){
//    echo "Connection Error".mysqli_connect_error();
//}else{
//    echo "Connected successfully...<br>";
//}
$encode_str=$_POST["encoded_string"];
//$state="Open";
//
//$lat=$_POST["lat"];
//$lng=$_POST["lng"];
//
//$decoded_string=base64_decode($encode_str);
//$path='images/'.$img_name;
//$file=fopen($path,'wb');
//$is_written=fwrite($file,$decoded_string);
//fclose($file);
//echo $encode_str;

mysqli_close($con);
?>