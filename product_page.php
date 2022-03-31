<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Bootstrap-->
  <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="Stylesheet.css">
  <link rel="stylesheet" href="./font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

  <title>Product Page</title>
</head>

<body>

  <!--Navigation bar-->
  <nav class="navbar navbar-expand-lg pt-1">

    <!-- Navbar brand -->
    <div>
      <a class="navbar-brand" href="#">
        <img src="./images/logo_transparent.png" width="80px" alt="">
      </a>
    </div>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1">
      <span class="dark-blue-text">
        <i class="bi bi-menu-up" style="color: #fce181; background-color: #026670;"></i>
      </span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

      <!-- Links -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link" href="homepage.php">
            <i class="bi-house-fill"></i>
            Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product_page.php">
            <i class="bi-cart4"></i>
            Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">
            <i class="bi-gear-fill"></i>
            Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="bi bi-person-video2"></i>
            <?php if(isset($_SESSION["user"])){
                            echo $_SESSION["user"];}
                            else{ echo "Profile";} ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="bi-person-circle"></i>
            <?php if(isset($_SESSION["user"])){
                            echo "Logout";}
                            else{ echo "Login";} ?></a>
        </li>
      </ul>
      <!-- Links -->

    </div>
    <!-- Collapsible content -->
  </nav>

  <!-- search box -->
  <div class="search-bar pb-2 pt-1">
    <div class="container-fluid">
      <div class="row height d-flex justify-content-end align-items-center">
        <div class="col-md-8">
          <div class="search"> <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Have a question? Ask Now">
            <button class="btn btn-primary">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-hero mt-4 gap-3 pb-4">
    <div class="row">
      <div class="crs-remove col-lg-8 col-md-6">
        <!--Carousel display-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/books.jpg" class="d-block w-100" alt="books" height="360">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="trend-details">Trending</h5>
                <p class="trend-text">We offer a variety of books.</p>
                <a href="#" class="btn button">Visit our products page</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/images/hangers.jpg" class="d-block w-100" alt="clothes" height="360">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="trend-details"> Trending</h5>
                <p class="trend-text">An online closet at your finger tips</p>
                <a href="#" class="btn button">Visit our products page</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/images/school-supplies.jpg" class="d-block w-100" alt="stationary" height="360">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="trend-details">Trending</h5>
                <p class="trend-text"> We offer quality stationary</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>

      </div>

      <div class="col-md-6 col-lg-4 col-sm-12 px-4">
        <div class="gallery ">
          <h2 class=" gallery-title">Gallery</h2>
          <img src="./images/black-friday.png" class=" img-fluid " alt="black-friday sale">
          <p class="gallery-text pt-2">Your favourite time of year is back again! Don't forget to visit our products and
            services page to get more information about the amazing deals on offer
          </p>
          <button class="btn">Visit</button>

        </div>

      </div>
    </div>
  </div>



  <!--New Arrivals box-->
  <section class="arrival-section">
    <!-- top -->
    <div class="row">
      <div class="col">
        <span class="arrival-heading">New Arrivals</span>
      </div>
      <div class="col text-end">
        <a class="button-more" href="#">more<i class="bi bi-chevron-double-right" style="font-size: smaller;"></i></a>
      </div>
    </div>

    <!--cards-->
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4 pt-4 pb-5">
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/pens.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow">
                <a href="Product-page2.html" target="_self">
                  Select
                </a>
              </button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/pencils.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/calculator.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/sneakers.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>

      <!--row 2 of card-->
      <div class="row row-cols-1 row-cols-md-2 g-4 pt-4 pb-5">
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/red-top.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/red-bags.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/stationary.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/pencil-case.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>

      <!--row 3 of card-->
      <div class="row row-cols-1 row-cols-md-2 g-4 pt-4 pb-5">
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/muffins.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/jeans.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/classic-bag.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/pencil-case.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>

      <!--row 4 of card-->
      <div class="row row-cols-1 row-cols-md-2 g-4 pt-4 pb-5">
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/color-sneakers.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/doughnut.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/fruits.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card product-card h-100 shadow">
            <div class="inner"><img src="./images/heels.jpg" class="card-img-top" alt="..."></div>
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-outline-info btn-outline-dark shadow"> Select</button>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--New arrivals-->

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
              <i class="fas fa-gem me-3"></i>E-Market
            </h6>
            <p>
              Peer-to-Peer trading made simpler and safer
            </p>
          </div>
          <!-- Grid column -->




          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="bi bi-house-fill me-3"></i> Matsapha,Kwaluseni</p>
            <p>
              <i class="bi bi-envelope-paper-fill me-3"></i>
              e-market@gmail.com
            </p>
            <p><i class="bi bi-telephone-forward-fill me-3"></i> +268 2505 3389</p>
            <p><i class="bi bi-telephone-forward-fill me-3"></i> +268 76053389</p>
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
</body>

</html>