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
                <p>Home / PRODUCTS / WOMEN'S</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- `end of breadcrumb -->
<h1 style="text-align: center">BELT'S</h1>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/75.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=75">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=75" style="color: black">BLACK LEATHER BELT</a></h4>
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
                <img src="images/index/76.jpeg">
                
                <div class="detail" style="padding: 14px 0px 11px ">
                <a class="btn btn-success hover" href="cart-add.php?id=76">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=76" style="color: black">BLACK BUKKLE BELT</a></h4>
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
                <img src="images/index/77.jpeg">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=77">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=77" style="color: black">FORMAL BELT</a></h4>
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
                <img src="images/index/78.jpeg" height="300px" width="300px">
                
            <div class="detail"  style="padding: 16px 0px 20px ">
                <a class="btn btn-success hover" href="cart-add.php?id=78">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=78" style="color: black">GREEN DENIM BELT</a></h4>
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
                <img src="images/index/79.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=79">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=79" style="color: black">MAHROON BELT</a></h4>
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
                <img src="images/index/80" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=80">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=80" style="color: black">URBAN FOREST BELT</a></h4>
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
                <img src="images/index/81.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=81">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=81" style="color: black">WOODLAND BELT</a></h4>
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
                <img src="images/index/82.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=82">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=82" style="color: black">LEVIS BELT</a></h4>
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
                <img src="images/index/83.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=83">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=83" style="color: black">LEATHER BELT</a></h4>
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
                <img src="images/index/84.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=84">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=84" style="color: black">WOODLAND MAHROON BELT</a></h4>
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
                <img src="images/index/85.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=85">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=85" style="color: black">ROPE BELT</a></h4>
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
                <img src="images/index/86.jpeg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=86">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description1.php?id=86" style="color: black">LORUM BELT</a></h4>
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