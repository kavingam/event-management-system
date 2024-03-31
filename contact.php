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
                <a class="nav-link" href="services.php">Service</a>
                <a class="nav-link" href="prices.php">Pricing</a>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="media.php">Media</a>
                <a class="nav-link" href="contact.php">Contact Us</a>
            </div>
            </div>
        </div>
    </nav>

    </header>
    <section>
        <!--  -->
        <div class="container text-center p-5">
           <h1>We Are KHOT</h1>
           <p class="fs-4">We bring dream weddings to life!</p>
        </div>
    </section>
    <section>
        <div class="container">
            <figure class="d-grid gap-2 d-md-flex justify-content-md-start">
            <h3>Say Hello!</h3>
            </figure>
            <div class="row">
            <div class="col-sm-6">
            <form class="" action="/action_page.php">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Contact Number" name="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Enter Message"></textarea>
                </div>
                <div class="form-check mb-3">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                
                </form>
            </div>
            <div class="col-sm-6">
            <dl>
                <dt>Coffee</dt>
                <dd>- black hot drink</dd>
                <p><a href="#" class="link-underline-dark">Dark underline</a></p>
                <dt>Milk</dt>
                <dd>- white cold drink</dd>
                <p><a href="#" class="link-underline-dark">Dark underline</a></p>
                <dt>Milk</dt>
                <dd>- white cold drink</dd>
                <p><a href="#" class="link-underline-dark">Dark underline</a></p>
                <dt>Milk</dt>
                <dd>- white cold drink</dd>
                <dt>Milk</dt>
                <dd>- white cold drink</dd>
                <p><a href="#" class="link-underline-dark">Dark underline</a></p>
            </dl>  
            </div>
            <div class="col-sm-12">
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
</body>
</html>