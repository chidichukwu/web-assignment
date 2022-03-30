<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="./service-stylesheet.css">
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Profile page</title>
</head>

<body>

    <!--navbar-->

    <nav class="navbar navbar-expand-lg pt-1">

        <!-- Navbar brand -->
        <div>
            <a class="navbar-brand" href="#">
                <img src="./images/logo_transparent.png" width="80px" alt="">
            </a>
        </div>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent1">
            <span class="dark-blue-text">
                <i class="bi bi-menu-up" style="color: #fce181; background-color: #026670;"></i>
            </span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="bi-house-fill"></i>
                        Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product page.html">
                        <i class="bi-cart4"></i>
                        Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">
                        <i class="bi-gear-fill"></i>
                        Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Profile-page.html">
                        <i class="bi bi-person-video2"></i>
                        Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">
                        <i class="bi-person-circle"></i>
                        Logout</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->
    </nav>

    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                            style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="/images/african-girl.jpg" alt="Student image"
                                    class="img-fluid img-thumbnail mt-1 mb-2"
                                    style="width: 150px; z-index: 1; height: 200px;" id="profile-picture">
                                <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                    style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top: 100px;">
                                <h5>Naomi Horwitz</h5>
                                <h6>Student ID : 292103295</h6>
                                <h6>Cell-number : +268 76629134</h6>

                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>

                                </div>
                                <div class="px-3">

                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">Following</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <form class="row g-3" action="./Profile_data_capture.php" method="POST">
                                <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Item name /Title</label>
                                    <input type="text" name="Item_name" class="form-control is-valid"
                                        id="validationServer01" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationServerUsername" class="form-label">Price</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend3">E</span>
                                        <input type="text" name="Item_price" class="form-control is-invalid"
                                            id="validationServerUsername"
                                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                                            required>
                                        <span class="input-group-text">.00</span>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Enter amount (to the nearest emalangeni).
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationServer05" class="form-label">Quantity</label>
                                    <input type="text" name="Item_quantity" class="form-control is-invalid"
                                        id="validationServer05" aria-describedby="validationServer05Feedback" required>
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        Please provide quantity of item.
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationServer06" class="form-label">Item Duration</label>
                                    <input type="text" name="Item_duration" class="form-control is-invalid"
                                        id="validationServer06" aria-describedby="validationServer06Feedback" required>
                                    <div id="validationServer06Feedback" class="invalid-feedback">
                                        Enter number of days
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="validationServer04" class="form-label">Categories</label>
                                    <select class="form-select is-invalid" name="Item_type" id="validationServer04"
                                        aria-describedby="validationServer04Feedback" required>
                                        <option selected disabled value="">Choose categories...</option>
                                        <option>Products</option>
                                        <option>Tutoring services</option>
                                        <option>Events</option>
                                        <option>Make-up services</option>
                                        <option>Nail services</option>
                                        <option>Hair-dressing services</option>
                                        <option>Other services</option>
                                    </select>
                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Student ID</label>
                                    <input type="text" name="studentid" class="form-control is-valid"
                                        id="validationServer01" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 pb-4">
                                    <label for="formFileMultiple" class="form-label">Upload Image</label>
                                    <div class="input-group has-validation">
                                        <input class="form-control" name="Item_image" type="file" id="formFileMultiple"
                                            multiple />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationServer03" class="form-label">Additional
                                        Information/Description</label>
                                    <textarea type="text" name="Item_description" rows="3"
                                        class="form-control is-invalid" id="validationServer03"
                                        aria-describedby="validationServer03Feedback" required></textarea>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        Please enter additional Information.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input is-invalid" type="checkbox" value=""
                                            id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                        <label class="form-check-label" for="invalidCheck3">
                                            Agree to terms and conditions
                                        </label>
                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="bi bi-house-fill me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="bi bi-envelope-paper-fill me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="bi bi-telephone-forward-fill me-3"></i> + 01 234 567 88</p>
                        <p><i class="bi bi-printer-fill me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>