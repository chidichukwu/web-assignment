<?php

$servername="localhost";
$username="root";
$password="";
$db="E_Market";

$config=mysqli_connect($servername,$username,$password,$db);

if(!$config){
    die("Connection failed: \n".mysqli_connect_error());
}


 $user_name = (int) mysqli_real_escape_string($config, $user_name);
 $pwd = mysqli_real_escape_string($config, $pwd);

 

 $sql = "SELECT * FROM new_members
 WHERE student_id = '$user_name' AND s_password = '$pwd'";

 if(!(mysqli_query($config, $sql))){
    $name_err = "Incorrect or non-matching username";
    $pwd_err = "Incorrect or non-matching password";
 }
 else{
     $_SESSION["user"] = $user_name;
     mysqli_close($config);
     redirect('homepage.php');
 }

 function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}


?>