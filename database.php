<?php

include('config.php');

$db="CREATE DATABASE E_Market";

if(mysqli_query($config,$db)){
    echo"<br> Database created succesfuly";
}
else{
    echo"ERROR:Could not execute $db".mysqli_error($config);
}

mysqli_close($config);

?>