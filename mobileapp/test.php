<?php
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

if (!$con){
    echo "Connection Error".mysqli_connect_error();
}else{
    echo "Connected successfully...<br>";
}

$img_name="test.jpg";
$my_base64_string="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";



$img = $_POST['img']; // Your data 'data:image/png;base64,AAAFBfj42Pj4';
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
file_put_contents('/tmp/image.png', $data);



mysqli_close($con);
?>