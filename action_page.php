<?php
    // Create connection
    $conn = mysqli_connect("localhost", "root", "");

    //Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['pswd'];
    $confirm_password = $_POST['confirm_pswd'];

    $sql = "INSERT INTO users (username, email, userpassword)
    VALUES ('$username', '$email', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "<br><br> Data saved successfully";
    }
    else{
        echo "ERROR occurred";
    }

    mysqli_close($conn);

?>
