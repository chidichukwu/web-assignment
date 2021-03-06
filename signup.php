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

    <title>Register</title>
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
        <form method="post" action="action_page.php" class="d-grid">
            <div class="mb-3 mt-4">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="mb-3">
                <label for="confirm_pwd">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_pwd" placeholder="Re-enter password"
                    name="confirm_pswd">
            </div>
            <div class="mb-4">

            </div>

            <button type="submit" class="btn btn-secondary">Register</button>

            <span class="fine-print mt-3">Already have an account? <a class="reg-here" href="login.html">Sign
                    in</a></span>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>