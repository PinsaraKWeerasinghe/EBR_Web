<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


$_query="SELECT * FROM Maintainer";
$is_query_run=mysqli_query($con,$_query);

echo"<table class='table' border='1'><tr><th style='text-align: center'><h4>Maintainer ID</h4></th><th style='text-align: center'><h4>First name</h4></th><th style='text-align: center'><h4>Second name</h4></th><th style='text-align: center'><h4>Current State</h4></th><th style='text-align: center'><h4>Incident ID<h4></th></tr>";
while($query_execute=mysqli_fetch_assoc($is_query_run)){
	echo"<tr><td>".$query_execute["maintainer_ID"]."</td><td>".$query_execute["first_name"]."</td><td>".$query_execute["second_name"]."</td><td>".$query_execute["current_state"]."<a href='releasework.php?id=".$query_execute["maintainer_ID"]."'>  Release work</a></td><td>".$query_execute["incidet_id"]."<form action='asignwork.php'><input type='text' name='incidentID' ><input type='text' name='ids' value='".$query_execute["maintainer_ID"]."' hidden ><input type='submit' value='Submit'></form></td></tr>";
}
echo"</table>";

mysqli_close($con);


?>