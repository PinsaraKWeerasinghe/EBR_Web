<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");


$_query="SELECT * FROM Maintainer";
$is_query_run=mysqli_query($con,$_query);

echo"<table class='table' border='1'><tr style='background: #ff9f00'><th style='text-align: center'><h4>Maintainer ID</h4></th><th style='text-align: center'><h4>First name</h4></th><th style='text-align: center'><h4>Second name</h4></th><th style='text-align: center'><h4>Current State</h4></th><th style='text-align: center'><h4>Incident ID<h4></th></tr>";
while($query_execute=mysqli_fetch_assoc($is_query_run)){
	echo"<tr style='background: #faffcf'><td>".$query_execute["maintainer_ID"]."</td><td>".$query_execute["first_name"]."</td><td>".$query_execute["second_name"]."</td><td><mark>".$query_execute["current_state"]."</mark></td><td>".$query_execute["incidet_id"]."</td></tr>";
}
echo"</table>";

mysqli_close($con);


?>