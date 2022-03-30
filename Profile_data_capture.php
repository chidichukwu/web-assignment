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


 $Item_name = mysqli_real_escape_string($config,$_POST['Item_name']);
 $Item_price = mysqli_real_escape_string($config,$_POST['Item_price']);
 $Item_quantity = mysqli_real_escape_string($config,$_POST['Item_quantity']);
 $Item_duration = mysqli_real_escape_string($config,$_POST['Item_duration']);
 $Item_type = mysqli_real_escape_string($config,$_POST['Item_type']);
 $Item_studentid=mysqli_real_escape_string($config,$_POST['studentid']);
 $Item_image = mysqli_real_escape_string($config,$_POST['Item_image']);
 $Item_description = mysqli_real_escape_string($config,$_POST['Item_description']);

if($Item_type == "Products"){

    $sql="INSERT INTO $Item_type(product_name,product_price,uploaded_by,product_quantity,product_image,additional_info)
        VALUES('$Item_name','$Item_price','$Item_quantity','$Item_studentid','$Item_image','$Item_description')";

    if(mysqli_query($config,$sql)){
        echo"<br><br>Data added successfully.";
    }
    else{
        echo"ERROR:Could not be added $sql".mysqli_error($config);
    }
};

mysqli_close($config);

?>