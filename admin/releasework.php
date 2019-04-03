<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$id=$_GET["id"];

$_query="UPDATE `Maintainer` SET `current_state` = 'Free' WHERE `maintainer_ID` = '$id'";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

$_query="UPDATE `Maintainer` SET `incidet_id` = null WHERE `maintainer_ID` = '$id'";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>

<script type="text/javascript">location.href = 'maintainers.php';</script>


