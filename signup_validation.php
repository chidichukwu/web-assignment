<?php

$servername="localhost";
$username="root";
$password="";
$db="E_Market";

$config=mysqli_connect($servername,$username,$password,$db);

if(!$config){
    die("Connection failed: \n".mysqli_connect_error());
}
 


 $fullname=mysqli_real_escape_string($config,$_POST['fullname']);
 $student_id=mysqli_real_escape_string($config,$_POST['student_id']);
 $contact_details=mysqli_real_escape_string($config,$_POST['contact_details']);
 $s_password=mysqli_real_escape_string($config,$_POST['s_password']);
 $r_password=mysqli_real_escape_string($config,$_POST['r_password']);

 $check = "SELECT * FROM new_members
 WHERE student_id = '$student_id'";

if($result = mysqli_query($config, $check)){

    if(mysqli_num_rows($result) > 0){
        $name_err = "User alredy exist. Enter new user information";
    }else{

        $sql="INSERT INTO new_members(fullname,student_id,contact_details,s_password)
            VALUES('$fullname','$student_id','$contact_details','$s_password' )
        ";

        function redirect($url) {
            ob_start();
            header("Location: ".$url);
            ob_end_flush();
            die();
}

        if(mysqli_query($config,$sql)){

            $_SESSION["user"] = $student_id;
            mysqli_close($config);
            redirect('login.php');
        }


        
    }

}






mysqli_close($config);

?>