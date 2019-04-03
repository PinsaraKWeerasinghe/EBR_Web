<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


$_query="SELECT incident_id,location,insident_type,comment,state FROM incident";
$is_query_run=mysqli_query($con,$_query);

echo"<table class='table' border='1'><tr><th style='text-align: center'><h4>Report No.</h4></th><th style='text-align: center'><h4>Location</h4></th><th style='text-align: center'><h4>Incident type</h4></th><th style='text-align: center'><h4>Comment</h4></th><th style='text-align: center'><h4>Images</h4></th><th style='text-align: center'><h4>State<h4></th></tr>";
while($query_execute=mysqli_fetch_assoc($is_query_run)){
	echo"<tr><td>".$query_execute["incident_id"]."</td><td><a href='404.html'>".$query_execute["location"]."</a></td><td>".$query_execute["insident_type"]."</td><td>".$query_execute["comment"]."</td><td></td><td><a href='statechangerback.php?id=".$query_execute["incident_id"]."'>< </a>".$query_execute["state"]." <a href='statechangerfor.php?id=".$query_execute["incident_id"]."'>></a> </td></tr>";
}
echo"</table>";

mysqli_close($con);


?>