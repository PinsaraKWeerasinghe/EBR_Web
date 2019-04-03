<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

$id=$_GET["id"];

$_query="SELECT state FROM incident WHERE incident_id='$id'";
$is_query_run=mysqli_query($con,$_query);

$state=null;
$newState=null;


while($query_execute=mysqli_fetch_assoc($is_query_run)){
    $state=$query_execute["state"];
}

if ($state=="Open"){
    $_query="UPDATE `incident` SET `state` = 'In progress' WHERE `incident_id` = '$id'";

}if ($state=="In progress"){
    $_query="UPDATE `incident` SET `state` = 'Closed' WHERE `incident_id` = '$id'";
}
mysqli_query($con,$_query);

mysqli_close($con);


?>

<script type="text/javascript">location.href = 'issues.php';</script>

