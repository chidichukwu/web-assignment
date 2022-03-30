<?php

$servername="localhost";
$username="root";
$password="";
$db="E_Market";

$config=mysqli_connect($servername,$username,$password,$db);

if(!$config){
    die("Connection failed: \n".mysqli_connect_error());
}
 echo"Connected succesfully <br><br>".mysqli_get_host_info($config)."<br>";


 $fullname=mysqli_real_escape_string($config,$_POST['fullname']);
 $student_id=mysqli_real_escape_string($config,$_POST['student_id']);
 $contact_details=mysqli_real_escape_string($config,$_POST['contact_details']);
 $s_password=mysqli_real_escape_string($config,$_POST['s_password']);
 $r_password=mysqli_real_escape_string($config,$_POST['r_password']);
 $submit=mysqli_real_escape_string($config,$_POST['submit']);


    $sql="INSERT INTO new_members(fullname,student_id,contact_details,s_password)
        VALUES('$fullname','$student_id','$contact_details','$s_password' )
    ";

    if(mysqli_query($config,$sql)){

        echo"<br><br>Data added successfully.";
    }else{
        echo"ERROR:Could not execute $sql.".mysqli_error($config);
    }

mysqli_close($config);

?>