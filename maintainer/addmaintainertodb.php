<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$currents="free";

$_query="INSERT INTO Maintainer VALUES ('','$fname','$lname','$currents','')";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>

<script type="text/javascript">location.href = 'maintainers.php';</script>
