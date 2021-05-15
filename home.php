<?php
 require 'includes/common.php';
 if(!isset($_SESSION['email'])) {
 header('location: index.php');
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



    <title>APPAREL GALLERY</title>
  </head>
  <body>
      <?php 
       require 'includes/Check-if-added.php';
      ?>
      <nav class="navbar navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" style="font-size:25px" href="#">APPAREL GALLERY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodcat.php">Category</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="contact.html">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="confirm.php" style="font-weight: bold;"><i class="glyphicon glyphicon-shopping-cart" style="font-size: 35px;color: red;border: 1px solid black; border-radius: 100%"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of nav -->
<!-- start of slide carousel -->


    <div class="container bcontent">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-intervals="2000">
            <!--Carousel Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <!--Carousel Slides-->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="images/girls.jpg" alt="Lake">
                    <div class="carousel-caption">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 mx-auto">
                            <p>SPRING/SUMMER COLLECTION 2020</p>
                            <h1>GET UP TO 30% OFF</h1>
                            <h1>New Arrivals</h1>
                          <a href="women.html"><button class="btn0 mt-3 ml-2">SHOP</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="images/b3.jpg" alt="City">
                    <div class="carousel-caption">
                      <div class="container">
                        <div class="row justify-content-start text-left">
                          <div class="col-lg-8 mx-auto">
                            <p>SPRING/SUMMER COLLECTION 2020</p>
                            <h1>GET UP TO 30% OFF</h1>
                            <h1>New Arrivals</h1>
                            <a href="men.html"><button class="btn1 mt-3 ml-2">SHOP NOW</button>
                          </a>
                              </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/w3.jpg"alt="Tree">
                    <div class="carousel-caption">
                      <div class="container">
                        <div class="row justify-content-start text-right">
                          <div class="col-lg-8">
                            <p>SPRING/SUMMER COLLECTION 2020</p>
                            <h1>GET UP TO 30% OFF</h1>
                            <h1>New Arrivals</h1>
                          <a href="watches.html"><button class="btn2 mt-3 ml-2">SHOP NOW</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!--Carousel Previous Next Controls-->
            <a class="carousel-control-prev" href="#carouselExample" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
<!-- end of carsouel-->
<section class="sub">
  <div class="container py-3 text-white">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div class="col-lg-2">
            <span><i class="fa fa-undo" style="font-size:40px"></i></span>
          </div>
            <div class="col-lg-10">
              <h5>Return & Exchange</h5>
            </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div class="col-lg-2">
            <span><i class="fa fa-gift" style="font-size:40px"></i></span>
          </div>
            <div class="col-lg-10">
              <h5>Recieve Gift Cards</h5>

            </div>
          </div>
        </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="row">
          <div class="col-lg-2">
            <span> <i class="fa fa-user" style="font-size:40px"></i> </span>
          </div>
            <div class="col-lg-10">
              <h5>Online Support</h5>


          </div>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="row">
            <input type="text" placeholder="Your Email">
            <a href="index.html"><button class="btn4" >SUBSCRIBE</button></a>

        </div>

      </div>

    </div>

  </div>

</section>
<!-- end of icons -->
<section class="collection">
  <div class="container">
    <h1 class="text-center">New Collections</h1>
    <hr />
    <div class="row py-6">
      <div class="col-lg-3">
        <div class="card">
            <img src="images/index/1.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=1" style="color:black">Men's Fit Shirt</a></h5>
               <p><small><del>Rs.799</del><span> Rs.500</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/2.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=2" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=2" style="color:black">Apple series 3 watch</a></h5>
               <p><small><del>Rs.12,000</del><span> Rs.10,999</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/3.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=3" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=3" style="color:black">Pepe Men's Jeans</a></h5>
               <p><small><del>Rs.1500</del><span> Rs.999</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/4.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=4" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=4" style="color:black">Yellow Women Kurta</a></h5>
               <p><small><del>Rs.799</del><span> Rs.500</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/5.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=5" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=5" style="color:black">Adidas Men's Shoes</a></h5>
               <p><small><del>Rs.7,000</del><span> Rs.3,999</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/6.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=6" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=6" style="color:black">Women's T-Shirt</a></h5>
               <p><small><del>Rs.799</del><span> Rs.450</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/7.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=7" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=7" style="color:black">Women's Wrist band</a></h5>
               <p><small><del>Rs.799</del><span> Rs.500</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/8.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=8" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=8" style="color:black">Printed Men's T-Shirt</a></h5>
               <p><small><del>Rs.799</del><span> Rs.520</span></small></p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="parallex py-5">
  <div class="container py-5 ">
    <div class="row py-3">
      <div class="col-lg-9 mx-auto text-center ">
        <h1>Men's Lookbook </h1>
        <p class="py-3">Best Watches available on the cheapest price at this store<br />
        YOU ARE ON AMAZING PLATFORM FOR CLOTHES</p>
        <a href="prodcat.html"><button class="btn5 mr-1">SHOP NOW</button></a>
        <a href="index.php"><button class="btn6 mr-1">GET DEALS</button></a>

      </div>

    </div>

  </div>

</section>

<section class="collection">
  <div class="container">
    <h1 class="text-center">FEATURED PRODUCTS</h1>
    <hr />
    <div class="row py-6">
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/9.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=9" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=9" style="color:black">Rolex watch</a></h5>
               <p><small><del>Rs. 37,000</del><span> Rs.20,000</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/10.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=10" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=10" style="color:black">Nike Men's Shoes</a></h5>
               <p><small><del>Rs, 2,780</del><span> Rs.1,995</span></small></p>
        </div>
      </div>  <div class="col-lg-3">
        <div class="card">
            <img src="images/index/11.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=11" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=11" style="color:black">Nikon Camera FG</a></h5>
               <p><small><del>Rs.47,000</del><span> Rs.35,000</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/12.jpg" class="img-fluid  mb-3" alt="">                 
             <a href="cart-add.php?id=12" name="add" class="btn btn-block btn-primary add">Add to cart</a>           
             <h5><a href="Description.php?id=12" style="color:black">White Leather Belt</a></h5>
               <p><small><del>Rs.500</del><span> Rs.420</span></small></p>
        </div>
      </div>
      
      
    </div>

  </div>
</section>

<section class="contact bg-light pt-5 text-center">
  <div class="container">
    <div class="row py-3">
      <div class="col-lg-7 mx-auto">
        <input type="text" name="" placeholder="Enter Your Email Adress" value="">
        <button class="btn7 my-5">GET NOTIFIED</button>
        <p>Designed and developed by Abhishek</p>
        <p>@copyright 2021 power All Rights Reserved</p>

      </div>

    </div>

  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  </body>
</html>
