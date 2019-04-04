<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


$_query="SELECT incident_id,location,insident_type,comment,state,lat,lng FROM incident";
$is_query_run=mysqli_query($con,$_query);

echo"<table class='table' border='1'><tr><th style='text-align: center'><h4>Report No.</h4></th><th style='text-align: center'><h4>Location</h4></th><th style='text-align: center'><h4>Incident type</h4></th><th style='text-align: center'><h4>Comment</h4></th><th style='text-align: center'><h4>Images</h4></th><th style='text-align: center'><h4>State<h4></th></tr>";
while($query_execute=mysqli_fetch_assoc($is_query_run)){
	echo"<tr><td>".$query_execute["incident_id"]."</td><td><a href='map.php?lat=".$query_execute["lat"]."&long=".$query_execute["lng"]."'>".$query_execute["location"]."</a></td><td>".$query_execute["insident_type"]."</td><td>".$query_execute["comment"]."</td><td></td><td>".$query_execute["state"]." </td></tr>";
}
echo"</table>";

mysqli_close($con);


?>