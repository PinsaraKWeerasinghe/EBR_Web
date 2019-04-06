<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


$_query="SELECT incident_id,location,insident_type,comment,state,lat,lng FROM incident";
$is_query_run=mysqli_query($con,$_query);

echo "<table  class='table' border='0'><tr style='background: #ff9f00'><th style='text-align: center'><h4>Report No.</h4></th><th style='text-align: center'><h4>Location</h4></th><th style='text-align: center'><h4>Incident type</h4></th><th style='text-align: center'><h4>Comment</h4></th><th style='text-align: center'><h4>Images</h4></th><th style='text-align: center'><h4>State<h4></th></tr>";
while($query_execute=mysqli_fetch_assoc($is_query_run)){
	echo"<tr style='background: #faffcf'><td><a class='alert' href='selectissue.php?id=".$query_execute["incident_id"]."' ><input type='button' class='alert' value='".$query_execute["incident_id"]."'></a></td><td><a href='map.php?lat=".$query_execute["lat"]."&long=".$query_execute["lng"]."'> <img src='images/marker.svg'  height='22' width='22'> <br>".$query_execute["location"]."</a></td><td>".$query_execute["insident_type"]."</td><td>".$query_execute["comment"]."</td><td><a href='incidentImage.php?id=".$query_execute["incident_id"]."' ><img src='images/camera.png'  height='22' width='32'> <br>View Image</a></td><td><mark>".$query_execute["state"]." </mark></td></tr>";
}
echo"</table>";

mysqli_close($con);


?>