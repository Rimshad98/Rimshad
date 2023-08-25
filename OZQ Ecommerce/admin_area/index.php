<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- boostrat css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .footer{
    position: absolute;
    bottom: 0;
} 
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="../images/Logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>



        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>


        <!-- third child -->
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../images/apple.jpg" alt="" class="admin_image"></a>
                    <p class="text-dark text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">Insert Products</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">View Products</a></button>
                    <button class="btn btn-light"><a href="index.php?insert_category" class="nav-link text-dark my-1">Insert Categories</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">View Categories</a></button>
                    <button class="btn btn-light"><a href="index.php?insert_brand" class="nav-link text-dark my-1">Insert Brands</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">View Brands</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">All Orders</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">All Payments</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">List users</a></button>
                    <button class="btn btn-light"><a href="" class="nav-link text-dark my-1">Logout</a></button>
                </div>
            </div>
        </div>


        <!-- fourth child -->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            ?>
        </div>

        <!-- Footer -->
    <div class="bg-body-tertiary p-3 text-center footer">
        <p>All rights reserved Design by Rimshad</p>
    </div>
    </div>





    <!-- boostrat js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    
</body>

</html>