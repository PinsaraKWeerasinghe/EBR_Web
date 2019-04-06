<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$username=$_POST["userName"];
$password=$_POST["pWord"];
$accno=$_POST["accNo"];
$firstname=$_POST["firstName"];
$lastname=$_POST["lastName"];
$email=$_POST["email"];
$mobileno=$_POST["mobNo"];
$no=$_POST["no"];
$streetname=$_POST["street"];
$city=$_POST["city"];
$zipno=$_POST["zip"];

$_query="INSERT INTO User VALUES ('','$username',md5($password),'$accno','$firstname','$lastname','$email','$mobileno','$no','$streetname','$city','$zipno')";

if(mysqli_query($con,$_query)){
    echo "Data insert success fully";
}else{
    echo "Data insert error ".mysqli_error($con);
}

mysqli_close($con);
?>