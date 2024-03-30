<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOT | Event Management System </title>
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
    <header class="container mt-2">
    <figure class="d-grid gap-2 d-md-flex justify-content-md-end">
        <select class="select-custom" aria-label="languages">
            <option selected>us-eng</option>
            <option value="1">uk-eng</option>
            <option value="2"></option>
            <option value="3"></option>
        </select>
        <a class="btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#login" href="#">LOGIN</a>
        <a class="btn-custom" type="button" data-bs-toggle="modal" data-bs-target="#signup" href="#">SIGNUP</a>
    </figure>
    <nav class="navbar navbar-expand-lg nav-custom ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">KHOT / Event Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
               
            </div>

            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="service.php">Service</a>
                <a class="nav-link" href="pricing.php">Pricing</a>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="media.php">Media</a>
                <a class="nav-link" href="contact.php">Contact Us</a>
            </div>
            </div>
        </div>
    </nav>

    </header>
    <section class="container">
        <div class="content">
            <img src="assets/img/slide-1.jpg" alt="banner">
            <h1 class="title">Your Event,Your Planning</h1>
            <p class="title-news">Get offer 30% </p>
            <div class="browse-news row p-2 justify-content-center">
                <div class="col-sm-3 p-2">
                    <select class="category-select-1" aria-label="catelogry">
                        <option selected>select category</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>
                <div class="col-sm-3 p-2">
                    <select class="category-select-2" aria-label="location">
                        <option selected>select location</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>
                <div class="col-sm-3 p-2">
                    <button class="category-button">search</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5">
    <figure class="d-grid gap-2 d-md-flex justify-content-md-between">
        <h3>Browse By Category</h3>
        <p class="fw-normal">view all (10)</p>
    </figure>
    <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>
    <div class="d-grid gap-2 mt-4 d-md-flex justify-content-md-center">
        <button type="button" class="badge text-bg-secondary text-wrap btn btn-secondary btn-sm"><<</button>
        <p class="badge text-bg-primary text-wrap">1</p>
        <p class="badge text-bg-primary text-wrap">2</p>
        <p class="badge text-bg-primary text-wrap">3</p>
        <p class="">...</p>
        <p class="badge text-bg-primary text-wrap">4</p>
        <button type="button " class="badge text-bg-secondary text-wrap btn btn-secondary btn-sm">>></button>
    </div>
    </section>
    <section class="container">
    <figure class="d-grid gap-2 d-md-flex justify-content-md-between">
        <h3>Popular Events<h3>
        <p class="fw-normal">view all (10)</p>
    </figure>
    <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
        <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>
    <div class="d-grid gap-2 d-md-flex mt-4 justify-content-md-center">
    <div class="d-grid gap-2 mt-4 d-md-flex justify-content-md-center">
        <button type="button" class="btn btn-secondary" style="--bs-btn-padding-y: .10rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><<</button>
        <p class="badge text-bg-primary text-wrap">1</p>
        <p class="badge text-bg-primary text-wrap">2</p>
        <p class="badge text-bg-primary text-wrap">3</p>
        <p class="">...</p>
        <p class="badge text-bg-primary text-wrap">4</p>
        <button type="button " class="btn btn-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">>></button>
    </div>
    </div>
    </section>
    <section>
        <!-- service info -->
        <div class="container mt-4 bg-secondary p-5 mb-5">
            <div class="row">
                <div class="col-sm-4">
                <div class="card border-secondary h-100">
                    <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
                    <!-- <div class="card-body bg-secondary">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div> -->
                </div>                    
                </div>
                <div class="col">
                <div class="card text-end border-secondary h-100">
                    <div class="card-body bg-secondary">
                        <h5 class="text-start card-title">Special title treatment</h5>
                        <p class="text-start card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <section>
        <div class="container">
        <figure class="d-grid gap-2 d-md-flex justify-content-md-start">
        <h3>Our Management Teams<h3>
        </figure>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="assets/img/slide-0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container mt-5">
        <figure class="d-grid gap-2 d-md-flex justify-content-md-start">
        <h3>Review<h3>
        </figure>
        <div class="row justify-content-center">
        <div class="col-sm-5 p-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/img/slide-0.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/img/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/slide-0.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
    </section>

    <footer>
        <div class="container mt-5 fs-6 fw-light">
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <h1 class="fs-6 ">KHOT Event Management</h1>
                    <p class="">Social Media</p>
                </div>
                <div class="col-sm-2">
                    <p class=""><b>Category</b></p>
                </div>
                <div class="col-sm-2">
                <p class=""><b>Services</b></p>
                </div>
                <div class="col-sm-2">
                <p class=""><b>Quick Link</b></p>
                    <a href="#">About Us</a>
                    <a href="#">careers</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                </div>
                <div class="col-sm-2">
                    <p class=""><b>news later</b></p>
                    <p class="">subscribe to lastest media update</p>
                    <input class="form-control form-control-sm" type="text" placeholder="email address" aria-label=".form-control-sm example">
                    <button class="btn btn-success btn-sm">subscribe</button>
                </div>
                <div class="col-sm-12">
                    <p class="text-center">copyright 2024</p>
                </div>
            </div>
        </div>
    </footer>
    <section>
        <!-- Login Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="login">LOGIN ACCOUNT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <!-- Sign up Modal -->
        <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signup">SIGNUP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            </div>
        </div>
        </div>
    </section>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
    </script>
</body>
</html>