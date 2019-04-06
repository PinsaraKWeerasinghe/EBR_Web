<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


$incident=$_GET["id"];

$imagei="";

$_query="SELECT imagename,imagepath FROM incident WHERE incident_id=$incident";
$is_query_run=mysqli_query($con,$_query);


while($query_execute=mysqli_fetch_assoc($is_query_run)){

    $imagei=$query_execute["imagepath"];

}

mysqli_close($con);

echo"<img src='data:image/png;base64,$imagei'>";

?>