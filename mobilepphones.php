<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])){
header('location:home.php');
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="product2.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



    <title>APPAREL GALLERY</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bh-white">
  <div class="container-fluid">
    <a class="navbar-brand pl-5" style="font-size:25px" href="#">APPAREL GALLERY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of nav -->
<!-- BREAD-CRUMBS -->
<section class="breadcrumb breadcrumb-bg " style="background:black;position: relative;z-index: 1;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="crumb-inner">
              <div class="crumb-text">
                <p>Home / PRODUCTS / MOBILE'S</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- `end of breadcrumb -->
<h1 style="text-align: center">PHONES</h1>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/123.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=123">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=123" style="color: black">REDMI</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 1199 </span><small><del>Rs.1700 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/124.jpg">
                
                <div class="detail" style="padding: 14px 0px 11px ">
                <a class="btn btn-success hover" href="cart-add.php?id=124">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=124" style="color: black">SAMSUNG M20</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 5444 </span><small><del>Rs.6444 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/125.jpg">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=125">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=125" style="color: black">OPPO F5</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 5999 </span><small><del>Rs.7999 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/126.jpeg" height="300px" width="300px">
                
            <div class="detail"  style="padding: 16px 0px 20px ">
                <a class="btn btn-success hover" href="cart-add.php?id=126">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=126" style="color: black">IPHONE XR</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 4999 </span><small><del>Rs.5999 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/127.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=127">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=127" style="color: black">IPHONE 11</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 599 </span><small><del>Rs.699 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/128.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=128">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=128" style="color: black">REDMI NOTE MAX PRO</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 1299 </span><small><del>Rs.1499 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/129.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=129">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=129" style="color: black">REDMI 8</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 899 </span><small><del>Rs.999 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/130.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=130">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=130" style="color: black">SAMSUNG</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 7599 </span><small><del>Rs.8599 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/131.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=131">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=131" style="color: black">REALME</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 3999 </span><small><del>Rs.4999 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/132.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=132">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=132" style="color: black">OPPO F21</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 3450 </span><small><del>Rs.4500 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/133.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=133">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=133" style="color: black">REDMI 5 PRO MAX</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 799 </span><small><del>Rs.899 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/134.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=134">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=134" style="color: black">REDMI 11 PRO</a></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p><span>Rs. 7000 </span><small><del>Rs.7700 </del> ( 10% off)</small> </p>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                
            </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<?php include 'includes/footer.php';
?>
  </body>
</html>