<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$id=$_GET["ids"];
$incidentid=$_GET["incidentID"];

$_query="UPDATE `Maintainer` SET `incidet_id` = '$incidentid' WHERE `maintainer_ID` = '$id'";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

$_query="UPDATE `Maintainer` SET `current_state` = 'Busy' WHERE `maintainer_ID` = '$id'";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>

<script type="text/javascript">location.href = 'maintainers.php';</script>


