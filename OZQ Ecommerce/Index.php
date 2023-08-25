<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEKS Ecommerce</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <img src="./images/Logo.png" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acount</a>
                    </li>
                </ul>
                <a class="nav-link me-3" href="#"><i class="fa fa-shopping-cart"></i><sup>1</sup></a>
                <div class="buttons">
                    <button class="btn btn-outline-dark "><i class="fa fa-sign-in"></i>Login</button>
                </div>
            </div>
        </div>
    </nav>


    <!-- second child -->
    <nav class="navbar navbar-expand-lg bg-body-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
        <h3 class="text-center">Hidden store</h3>
        <p class="text-center">Communication is at the heart of e-commerce and community</p>
    </div>





    <!-- fourth child -->
    <div class="row">
        <div class="col-md-2">
            <!-- Brands -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item p-0">
                    <a href="#" class="nav-link fw-bold">Delivery Brands</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Brand1</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Brand2</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Brand3</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Brand4</a>
                </li>
            </ul>

            <!-- Categories -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item p-0">
                    <a href="#" class="nav-link fw-bold">Categories</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Categories1</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Categories2</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Categories3</a>
                </li>
                <li class="nav-item p-0">
                    <a href="#" class="nav-link">Categories4</a>
                </li>
            </ul>
        </div>

        <div class="col-md-10">
            <!-- products -->
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/apple.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark me-2">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/sony.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark me-2">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/iwatch.jpg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark me-2">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/apple.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark me-2">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/apple.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark me-2">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./images/apple.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-outline-dark me-2">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- boostrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <!-- Footer -->
    <div class="bg-body-tertiary p-3 text-center">
        <p>All rights reserved Design by Rimshad</p>
    </div>
</body>

</html>