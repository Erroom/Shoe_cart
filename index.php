<!--connection databse -->
<?php
include('includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping-Cart</title>
    <!-- bootstrap Css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesomelink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Working on navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <i class='fas fa-shoe-prints' style='font-size:36px'></i>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"
                                    style="font-size:24px"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total price</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Working on products and side nav -->
        <!--second Child-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>
        <div id="Slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/causal01.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/causal02.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/causal03.jpeg" alt="Third slide">
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#Slider" data-slide-to="0" class="active"></li>
                        <li data-target="#Slider" data-slide-to="1"></li>
                        <li data-target="#Slider" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <!-- third child -->
            <div class="bg-light">
                <h3 class="text-center">Featured Store</h3>
                <p class="text-center">"Buy these shoes and makes feel unstoppable!"</p>
            </div>
            <!-- fourth child -->
            <div class="row">
                <div class="col-md-10">
                    <!-- product -->
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/sneaker1.jpeg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to CArt</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/sneaker3.jpeg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/sneaker2.jpeg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                            <h2 class="text-center fw-bold">New User Registration</h2>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/sneaker02.jpg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/sneaker5.jpeg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="./images/sneaker04.jpeg" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-info">Add to Cart</a>
                                    <a href="#" class="btn btn-secondary">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidenav -->
                <div class="col-md-2 bg-secondary p-0">
                    <ul class="navbar-nav me-auto text-center ">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light">Delivary Brands</a>
                        </li>

                        <?php
  $select_brands="SELECT *FROM brands";
  $result_brands=mysqli_query($con,$select_brands);
  while($row_data=mysqli_fetch_assoc($result_brands)){
    $brand_title=$row_data['brand_title'];
    $brand_id=$row_data['brand_id'];
    echo "<li class='nav-item'>
    <a href='index.php?brand=$brand_title' class='nav-link text-light'>$brand_title</a>
  </li>";
  }
  ?>
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light">Categories</a>
                        </li>

                        <?php
   $select_category="SELECT *FROM categories";
   $result_category=mysqli_query($con,$select_category);
   while($row_data=mysqli_fetch_assoc($result_category)){
     $category_title=$row_data['category_title'];
     $category_id=$row_data['category_id'];
     echo "<li class='nav-item'>
     <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
   </li>";
   }
   ?>
                    </ul>
                    </ul>
                </div>

                <!-- footer 

<div class="big-info p-3 text-center">
<p>@Shoe Cart,Shoe Shop private Limited, All rights reserved</p>
</div>
-->

                <!-- bootstrap js link -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>

</body>

</html>