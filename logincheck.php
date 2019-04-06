<?php

$inputuname=$_POST['uname'];
$inputpwd=$_POST['pwd'];
$uname="";
$muname="";
$pwd="";
$mpwd="";
$mysql_host="localhost";
$mysql_user="root";

$con=mysqli_connect($mysql_host,$mysql_user,"",	"Spark");

$_query="SELECT user_name,pass_word FROM Admin WHERE user_name='$inputuname'";
$is_query_run=mysqli_query($con,$_query);

$_query1="SELECT user_name,pass_word FROM Maintainer WHERE user_name='$inputuname'";
$is_query_run1=mysqli_query($con,$_query1);


while($query_execute=mysqli_fetch_assoc($is_query_run)){
    $pwd=$query_execute["pass_word"];
    $uname=$query_execute["user_name"];
}

while($query_execute=mysqli_fetch_assoc($is_query_run1)){
    $mpwd=$query_execute["pass_word"];
    $muname=$query_execute["user_name"];
}

mysqli_close($con);



session_start();

if(isset($_SESSION['uname'])){
    if($_SESSION['person']=="admin"){
        echo "<script type=\"text/javascript\">location.href = 'admin/index.php'</script>";
    }elseif ($_SESSION['person']=="maintainer"){
        echo "<script type=\"text/javascript\">location.href = 'maintainer/index.php'</script>";
    }

}else{
    if($_POST['uname']==$uname && md5($_POST['pwd'])==$pwd){
        $_SESSION['uname']=$uname;
        $_SESSION['person']="admin";
        echo "<script type=\"text/javascript\">location.href = 'admin/index.php'</script>";
        echo "SSS";

    }elseif ($_POST['uname']==$muname && md5($_POST['pwd'])==$mpwd){
        $_SESSION['uname']=$muname;
        $_SESSION['person']="maintainer";
        echo "<script type=\"text/javascript\">location.href = 'maintainer/index.php'</script>";
        echo "SSS";
    }

    else{
        echo "<script>alert('Username or Password incorrect!')</script>";
        echo "<script>location.href='index.php'</script>";
        echo "SwwwwSS";
    }
}


?>