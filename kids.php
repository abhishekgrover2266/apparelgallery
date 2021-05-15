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
                <p>Home / PRODUCTS / MEN'S</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- `end of breadcrumb -->
<h1 style="text-align: center">MEN's Clothes</h1>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="product thumbnail" style="padding: 10px">
                <img src="images/index/39.jpg" height="300px" width="300px">
                
                <div class="detail" style="padding: 12px 0px 12px">
                <a class="btn btn-success hover" href="cart-add.php?id=39">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=39" style="color: black">Sky blue skirt</a></h4>
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
                <img src="images/index/40.jpg">
                
                <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=40">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=40" style="color: black">Green & grey jacket</a></h4>
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
                <img src="images/index/41.jpg">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=41">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=41" style="color: black">Combo brown+white</a></h4>
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
                <img src="images/index/42.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=42">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=42" style="color: black">summer printed combo</a></h4>
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
                <img src="images/index/43.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=43">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=43" style="color: black">Red skirt</a></h4>
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
                <img src="images/index/44.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=44">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=44" style="color: black">Black One piece</a></h4>
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
                <img src="images/index/45.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=45">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=45" style="color: black">Combo pant Tshirt</a></h4>
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
                <img src="images/index/46.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=46">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=46" style="color: black">combo tshirt lower</a></h4>
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
                <img src="images/index/47.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=47">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=47" style="color: black">One piece</a></h4>
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
                <img src="images/index/48.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=48">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=48" style="color: black">levis one piece</a></h4>
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
                <img src="images/index/49.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=49">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=49" style="color: black">Check shirt</a></h4>
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
                <img src="images/index/50.jpg" height="300px" width="300px">
                
            <div class="detail">
                <a class="btn btn-success hover" href="cart-add.php?id=50">Add to cart</a>
                <h4 style="font-weight: bold"><a href="Description.php?id=50" style="color: black">black jacket Mc</a></h4>
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