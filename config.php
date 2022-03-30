<?php

$servername="localhost";
$username="root";
$password="";

$config=mysqli_connect($servername,$username,$password);

if(!$config){
    die("Connection failed: \n".mysqli_connect_error());
}
 echo"Connected succesfully \n"."<br> <br>".mysqli_get_host_info($config);

?>