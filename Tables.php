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

 // DROP ALL TABLES
 $d_members = "DROP TABLE new_members";
 $d_products = "DROP TABLE products";
 $d_tutoring_service = "DROP TABLE tutoring_service";
 $d_events = "DROP TABLE events";
 $d_cosmetics = "DROP TABLE cosmetics";
 $d_other_services = "DROP TABLE other_services";

 if(mysqli_query($config, $d_products)){ echo "Products table deleted successfully! <br>";}
 if(mysqli_query($config, $d_tutoring_service)){ echo "Tutoring table deleted successfully! <br>";}
 if(mysqli_query($config, $d_events)){ echo "Events table deleted successfully! <br>";}
 if(mysqli_query($config, $d_cosmetics)){ echo "Cosmetics table deleted successfully! <br>";}
 if(mysqli_query($config, $d_other_services)){ echo "Other table deleted successfully! <br>";}
 //deleted last due to constraints
 if(mysqli_query($config, $d_members)){ echo "Members table deleted successfully! <br>";}

 // CREATING NEW TABLES

 // New Users table structure
 $new_members="CREATE TABLE new_members(
     fullname VARCHAR(50) NOT NULL,
     student_id INT(9) NOT NULL PRIMARY KEY UNIQUE,
     contact_details INT(11) NOT NULL UNIQUE,
     s_password VARCHAR(10) NOT NULL
 )";

 if(mysqli_query($config,$new_members)){

    echo"<br> New members table successfuly created"."<br>";
 }
 else{
     echo"ERROR: ".mysqli_error($config);
     echo "<br>";
 }


 // Products table structure
$t_products="CREATE TABLE products(
    product_name VARCHAR(30) NOT NULL PRIMARY KEY,
    product_price INT(5) NOT NULL,
    product_quantity INT(5) NOT NULL,
    uploaded_by INT(9) NOT NULL,
    product_image blob NOT NULL,
    additional_info CHAR(100) NOT NULL,
    FOREIGN KEY upload_seller(uploaded_by)
    REFERENCES new_members(student_id) ON DELETE CASCADE
)";

if(mysqli_query($config,$t_products)){

    echo"<br> Products table successfully created <br>";
 }
 else{
     echo"ERROR: ".mysqli_error($config);
     echo "<br>";
 }


// Tutoring services table structure
$t_tutoring_service="CREATE TABLE tutoring_service(
    tutoring_service_name VARCHAR(30) NOT NULL PRIMARY KEY,
    tutoring_service_price INT(5) NOT NULL,
    uploaded_by INT(9) NOT NULL,
    tutoring_service_image blob,
    additional_info VARCHAR(100) NOT NULL,
    FOREIGN KEY upload_tutor(uploaded_by) 
    REFERENCES new_members(student_id) ON DELETE CASCADE
)";

if(mysqli_query($config,$t_tutoring_service)){

    echo"<br> Tutoring service table successfuly created <br>";
 }
 else{
     echo"ERROR: ".mysqli_error($config);
     echo "<br>";
 }


// Events table structure
$t_events = "CREATE TABLE events(
    event_name VARCHAR(30) NOT NULL PRIMARY KEY,
    event_price INT(5) NOT NULL,
    uploaded_by INT(9) NOT NULL,
    event_image blob NOT NULL,
    additional_info VARCHAR(100) NOT NULL,
    FOREIGN KEY upload_planner(uploaded_by) 
    REFERENCES new_members(student_id) ON DELETE CASCADE
  )";

if(mysqli_query($config,$t_events)){

    echo"<br> Events table successfuly created <br>";
 }
 else{
     echo"ERROR: ".mysqli_error($config);
     echo "<br>";
 }


 // Cosmetics table structure
 $t_cosmetics="CREATE TABLE cosmetics(
    cosmetics_name VARCHAR(30) NOT NULL PRIMARY KEY,
    cosmetics_price INT(5) NOT NULL,
    cosmetics_quantity INT(5),
    uploaded_by INT(9) NOT NULL,
    cosmetics_type VARCHAR(20) NOT NULL,
    cosmetics_image blob NOT NULL,
    additional_info VARCHAR(100) NOT NULL,
    FOREIGN KEY upload_artist(uploaded_by) 
    REFERENCES new_members(student_id) ON DELETE CASCADE
)";

if(mysqli_query($config,$t_cosmetics)){

    echo"<br> Cosmetics table successfuly created <br>";
 }
 else{
     echo"ERROR: ".mysqli_error($config);
     echo "<br>";
 }


 // Other services (advertisements etc) table structure
 $t_others = "CREATE TABLE other_services(
    services_name VARCHAR(30) NOT NULL PRIMARY KEY,
    services_desc VARCHAR(100) NOT NULL,
    services_prices INT(5) NOT NULL,
    services_image blob NOT NULL,
    uploaded_by INT(9) NOT NULL,
    duration INT(5) NOT NULL,
    FOREIGN KEY upload_misc(uploaded_by) 
    REFERENCES new_members(student_id) ON DELETE CASCADE
)";

if(mysqli_query($config,$t_others)){

    echo"<br> Other services table successfuly created <br>";
 }
 else{
     echo"ERROR: ".mysqli_error($config);
     echo "<br>";
 }


mysqli_close($config);

?>