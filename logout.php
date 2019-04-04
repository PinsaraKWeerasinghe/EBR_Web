<?php

session_start();

if(isset($_SESSION['uname'])){
    session_destroy();
    echo "<script type=\"text/javascript\">location.href = 'index.php'</script>";
}else{
    echo "<script type=\"text/javascript\">location.href = 'index.php'</script>";
}


?>