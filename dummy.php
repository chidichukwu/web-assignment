<?php

session_start();
// remove all session variables
session_unset();
$name_err = "";
$student_id= $fullname = $contact_details= $s_password=$r_password="";
$student_id_err= $r_pwd_err= $pwd_err= $name_err= $contact_detail_err="";

if(isset($_POST['submit'])){

        if(empty($_POST['fullname']))
        {
            $name_err='A fullname is required';
        }else{
            $fullname = clean_input($_POST['fullname']);

            if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
                $name_err = "Only letters and white space allowed";
              }
        }

        if(empty($_POST['student_id']))
        {
            $student_id_err="A student id is required";
        }
        else{
        
            $student_id=clean_input($_POST['student_id']);

            if (!preg_match("/^\\d+$/",$student_id)) {
                $student_id_err = "Only numbers allowed";
              }
        }

        if(empty($_POST['contact_details']))
        {
            $contact_detail_err="Contact details are required";
        }else{
            $contact_details=clean_input($_POST['contact_details']);

            if (!preg_match("/^\\d+$/",$contact_details)) {
                $contact_detail_err = "Only numbers allowed";
              }
        }
        
        if(empty($_POST['s_password']))
        {
            $pwd_err="A password is required";
        }else{
            $s_password=htmlspecialchars($_POST['s_password']);

            if (!preg_match("/^(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/",$s_password)) {
                $pwd_err= "Only numbers allowed";
              }
        }
        

        if(empty($_POST['r_password']))
        {
            $r_pwd_err='Repeat password';
        }else{
            $r_password=htmlspecialchars($_POST['r_password']);
        }

        // if(!empty($_POST['fullname']) && !empty($_POST['student_id']) && !empty($_POST['contact_details'])
        && !empty($_POST['s_password']) && !empty($_POST['r_password'])){
        //     $fullname = $_POST['fullname'];
        //     $student_id = $_POST['student_id'];
        //     $contact_details = $_POST['contact_details'];
        //     $s_password = $_POST['s_password'];
        //     $r_password = $_POST['r_password'];

        //     include_once('signup_validation.php');
        // }
}

    function clean_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
        }

?>
