<?php
$servername="localhost";
$username="root";
$password="";
$db="E_Market";

$config=mysqli_connect($servername,$username,$password,$db);

if(!$config){
    die("Connection failed: \n".mysqli_connect_error());
}
 

 $Item_name = mysqli_real_escape_string($config,$_POST['Item_name']);
 $Item_price = mysqli_real_escape_string($config,$_POST['Item_price']);
 $Item_quantity = mysqli_real_escape_string($config,$_POST['Item_quantity']);
 $Item_duration = mysqli_real_escape_string($config,$_POST['Item_duration']);
 $Item_type = mysqli_real_escape_string($config,$_POST['Item_type']);
 $Item_studentid=mysqli_real_escape_string($config,$_SESSION["user"]);
 $Item_image = mysqli_real_escape_string($config,$_POST['Item_image']);
 $Item_description = mysqli_real_escape_string($config,$_POST['Item_description']);

if($Item_type == "Products"){

    $sql="INSERT INTO $Item_type(product_name,product_price,uploaded_by,product_quantity,product_image,additional_info)
        VALUES('$Item_name','$Item_price','$Item_studentid','$Item_quantity','$Item_image','$Item_description')";

    if(mysqli_query($config,$sql)){
        echo"<br><br>Data added successfully.";
    }
    else{
        echo"ERROR:Could not be added $sql".mysqli_error($config);
    }
};

if($Item_type == "Tutoring services"){

    $sql="INSERT INTO Tutoring_service(tutoring_service_name,tutoring_service_price,uploaded_by,tutoring_service_image,additional_info)
        VALUES('$Item_name','$Item_price','$Item_studentid','$Item_image','$Item_description')";

    if(mysqli_query($config,$sql)){
        echo"<br><br>Data added successfully.";
    }
    else{
        echo"ERROR:Could not be added $sql".mysqli_error($config);
    }
};

if($Item_type == "Events"){

    $sql="INSERT INTO $Item_type(event_name,event_price,uploaded_by,event_image,additional_info)
        VALUES('$Item_name','$Item_price','$Item_studentid','$Item_image','$Item_description')";

    if(mysqli_query($config,$sql)){
        echo"<br><br>Data added successfully.";
    }
    else{
        echo"ERROR:Could not be added $sql".mysqli_error($config);
    }
};

if($Item_type == "Make-up services" || "Nail services" || "Hair-dressing services"){

    $sql="INSERT INTO cosmetics(cosmetics_name,cosmetics_price,cosmetics_quantity,uploaded_by,cosmetics_type,cosmetics_image,additional_info)
        VALUES('$Item_name','$Item_price','$Item_quantity','$Item_studentid','$Item_type','$Item_image','$Item_description')";

    if(mysqli_query($config,$sql)){
        echo"<br><br>Data added successfully.";
    }
    else{
        echo"ERROR:Could not be added $sql".mysqli_error($config);
    }
};

if($Item_type == "Other services"){

    $sql="INSERT INTO other_services(services_name,services_desc,services_prices,services_image,uploaded_by,duration)
        VALUES('$Item_name','$Item_description','$Item_price','$Item_image','$Item_studentid','$Item_duration')";

    if(mysqli_query($config,$sql)){
        echo"<br><br>Data added successfully.";
    }
    else{
        echo"ERROR:Could not be added $sql".mysqli_error($config);
    }
};



mysqli_close($config);

?>