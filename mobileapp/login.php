<?php

$mysql_host="localhost";
$mysql_user="root";


$username=$_POST["uname"];
$pwd=$_POST["pword"];




$dbpwd="";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    //echo "Connection Error".mysqli_connect_error();
}else{
    //echo "Connected successfully...<br>";
}

$_query="SELECT user_name,pass_word FROM User WHERE user_name='$username'";

$is_query_run=mysqli_query($con,$_query);

while($query_execute=mysqli_fetch_assoc($is_query_run)){
    $dbpwd=$query_execute["pass_word"];
}
mysqli_close($con);

if($pwd==$dbpwd){


    $arr = array('key' => "true");
    echo json_encode($arr);


//    echo "true";

}else{
//    echo "false";

    $arr = array('key' => "false");
    echo json_encode($arr);
}

?>