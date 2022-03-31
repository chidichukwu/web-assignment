<?php
    session_start();
    // remove all session variables
    session_unset();

    $name_err = "";
    $pwd_err = "";
    $user_name = $pwd =  "";

    if(isset($_POST['submit'])){

        if(empty($_POST['username'])){
            $name_err = "Username is required";
        }
        
        if(empty($_POST['password'])){
            $pwd_err = "Password is required";
        }
        
        if(!empty($_POST['password']) && !empty($_POST['username'])){
            $user_name = $_POST['username'];
            $pwd = $_POST['password'];

            include_once('login_validation.php');
        }
        

    }
    
    // function clean_input($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);

    //     return $data;
    // }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Logo Here
            </a>
        </div>
    </nav>

    <div class="container">
        <span class="form-header">Sign Up</span>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="d-grid">
            <div class="mb-3 mt-3">
                <label for="username">Username</label>
                <p style="color: red;"><?php echo $name_err ?></p>
                <input type="text" class="form-control" name='username' id="username" placeholder="Enter username" value="<?php echo $user_name ?>">
            </div>
            <div class="mb-3">
                <label for="pwd">Password</label>
                <p style="color: red;"><?php echo $pwd_err ?></p>
                <input type="password" class="form-control" name='password' id="pwd" placeholder="Enter password">
            </div>
            <div class="mb-2">
                <label class="forget-pass">
                    <span class="psw"><a href="#">Forgot password?</a></span>
                </label>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            <span class="fine-print mt-3">Dont have an account <a class="reg-here" href="Sign-up.php">Register
                    here</a></span>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>

