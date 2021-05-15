<?php
 require 'includes/common.php';
 if(isset($_SESSION['email'])) {
 header('location: home.php');
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

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
        include 'includes/header.php';
        include 'includes/login.php'
        ?>
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
          <input type="button" value="ADD TO CART">
          <h5>Men's Fit Shirt</h5>
          <p><small><del>Rs.799</del><span> Rs.500</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/2.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Apple series 3 watch</h5>
          <p><small><del>Rs.12000</del><span> Rs.10999</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/3.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Pepe Men's Jeans </h5>
          <p><small><del>Rs.1599</del><span> Rs.999</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/4.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Yellow Women Kurta</h5>
          <p><small><del>Rs.799</del><span> Rs.500</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/5.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Adidas Men's Shoes</h5>
          <p><small><del>Rs.7000</del><span> Rs.3999</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/6.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Women's T-Shirt</h5>
          <p><small><del>Rs.799</del><span> Rs.450</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/7.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Women's Wrist Band</h5>
          <p><small><del>Rs.700</del><span> Rs.500</span></small></p>
        </div>
      </div>
        <div class="col-lg-3">
        <div class="card">
            <img src="images/index/8.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Printed Men's T-Shirt</h5>
          <p><small><del>Rs.999</del><span> Rs.520</span></small></p>
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
        <a href="index.html"><button class="btn6 mr-1">GET DEALS</button></a>

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
          <input type="button" value="ADD TO CART">
          <h5>Rolex Watch Men's</h5>
          <p><small><del>Rs.37000</del><span> Rs.20000</span></small></p>
        </div>
      </div>
<div class="col-lg-3">
        <div class="card">
            <img src="images/index/10.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Nike Men's Shoes</h5>
          <p><small><del>Rs.2799</del><span> Rs.1950</span></small></p>
        </div>
      </div>
<div class="col-lg-3">
        <div class="card">
            <img src="images/index/11.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Nikon Camera FG</h5>
          <p><small><del>Rs.47700</del><span> Rs.35000</span></small></p>
        </div>
      </div>
<div class="col-lg-3">
        <div class="card">
            <img src="images/index/12.jpg" class="img-fluid  mb-3" alt="">
          <input type="button" value="ADD TO CART">
          <h5>Pure White Leather Belt</h5>
          <p><small><del>Rs.599</del><span> Rs.420</span></small></p>
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
