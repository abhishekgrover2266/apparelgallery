<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location:index.php');
}
$a=$_GET['id'];
$query="select * from items where id='$a'";
$q= mysqli_query($con, $query);
$qr= mysqli_fetch_array($q);
$id1=$qr['name'];
$id=$qr['id'];
$id3=$qr['price'];
$imgUrl = "images/index/$a.jpeg";

?>
<html>
    <head>
        <title>
            Description
        </title>
        <link rel="stylesheet" type="text/css" href="description.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body >
         <nav class="navbar navbar-expand-lg">
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
          <a class="nav-link" href="product.php">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categoriess
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="men.html">MEN</a></li>
            <li><a class="dropdown-item" href="women.html">WOMEN</a></li>
            <li><a class="dropdown-item" href="watches.html">ACESSORIES</a></li>
            <li><a class="dropdown-item" href="mobilephones.html">MOBILE PHONES</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of nav -->

        <div class="container single">
            <div class="col-md-5">
                <div class="productimage">
                    <img src="<?= $imgUrl ?>" class="img-responsive" id="product-img">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="description">
                        <h1><?php echo "$id1"; ?></h1>
                        <h4 style="color: red">Rs. <?php echo "$id3"; ?> INR</h4>
                        <select>
                            <option>Select Size</option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                        <br>
                        <form method="post" action="cart.php" class="col-md-12">
                            
                        <p>Qty.</p>
                            <div class="form-group col-md-6">
                                <input type="number" name="qty" value="1" class="form-control" style="width: 60px;margin-left: -25px">
                        <input type="number" value="<?= $id ?>" name="id" style="display:none">
                            </div>
                            <button class="btn btn-success col-md-6" type="submit">Add to cart </button>
                        </form>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h3 style="font-weight: bolder">Product Details</h3>
                        <br>
                        <p>Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit with a pair of shorts for your morning workout.Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit with a pair of shorts for your morning workout.Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit with a pair of shorts for your morning workout</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="container-fluid">
                <h1 style="text-align: center;margin: 40px"> Featured products</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="similar-product">
                            <img src="images/index/8.jpg" style="" class="img-responsive img-circle">                            
                        </div>
                        <h4><a href="Description.php?id=8" style="color: black">RED Tshirt Mc</a></h4>
                        <p><del>Rs. 800</del> Rs.400 <i>(50 %off)</i></p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p>Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit.....</p>
                        <a href="cart-add.php?id=8" name="add" class="btn btn-success">Add to cart</a>
                    </div>
                    <div class="col-md-3">
                        <div class="similar-product">
                            <img src="images/index/10.jpg" style="" class="img-responsive img-circle">                            
                        </div>
                        <h4><a href="Description.php?id=10" style="color: black">Nike Men's Shoe</a></h4>
                        <p><del>Rs. 2400</del> Rs.1200 <i>(50 %off)</i></p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p>Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit.....</p>
                    
                        <a href="cart-add.php?id=10" name="add" class="btn btn-success">Add to cart</a>
          
                    </div>
                    <div class="col-md-3">
                        <div class="similar-product">
                            <img src="images/index/6.jpg" style="" class="img-responsive img-circle">                            
                        </div>
                        <h4><a href="Description.php?id=6" style="color: black">Women Tshirt </a></h4>
                        <p><del>Rs. 950</del> Rs.425 <i>(50 %off)</i></p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p>Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit.....</p>
                    
                        <a href="cart-add.php?id=6" name="add" class="btn btn-success">Add to cart</a>
          
                    </div>
                    <div class="col-md-3">
                        <div class="similar-product">
                            <img src="images/index/12.jpg" style="" class="img-responsive img-circle">                            
                        </div>
                        <h4><a href="Description.php?id=6" style="color: black">leather belt</a></h4>
                        <p><del>Rs. 500</del> Rs.250 <i>(50 %off)</i></p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <p>Give Your summer wardrobe aa style upgrade with the HRX or Monte Carlo Tshirtit.....</p>
                    
                        <a href="cart-add.php?id=12" name="add" class="btn btn-success">Add to cart</a>
          
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
    </body>
</html>

