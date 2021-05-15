<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
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



  </head>
  <body>
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
          <a class="nav-link" href="product.php">Products</a>
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
<center>
        <?php
        $user_id=$_SESSION['id'];
        $query="SELECT item_id,name,price,qty FROM users_items INNER JOIN items ON users_items.item_id=items.id WHERE user_id='$user_id' AND status='Added to cart'";
        $qr=mysqli_query($con,$query) or die(mysqli_error($con));
        $n=mysqli_num_rows($qr);
        $sum=0;
        $i=1;
        $arr= mysqli_fetch_array($qr);
        $id="".$arr['item_id'];
        
        if($n==0){
            echo ""?><h3 style="justify-content: center;align-items: center"><?="<a href='home.php'>Add</a> items to cart first</h3>";
        }else{
            ?></center>
        <div class="row">
	<div class="col-xs-6 col-xs-offset-3 table-responsive">
	<table class="table table-centered table-hover">
            <tr><th>Item Number</th><th style="text-align: center">Item</th><th >Name</th><th>Price</th><th>Qty.</th></tr>
	<?php
            while($n>0){
               $qty=$arr['qty'];
               $sum=$sum + ($arr['price']*$qty);
               $name=$arr['name'];
               $a=$arr['item_id'];
               $imgUrl="images/index/$a.jpg";
               echo "<tr><td>".$arr['item_id']."</td>"?><td><img src="<?= $imgUrl; ?>" width="200px" height="150"/> </td><td style="font-weight: bold"><?php echo"$name" ?></td><?php echo"<td>".$arr['price']."</td><td>$qty</td><td><a href='cart_remove.php?id=".$arr['item_id']."'class='remove_item_link btn btn-danger'>Remove</a></tr>";
               $arr= mysqli_fetch_array($qr);
               $id= $id.",".$arr['item_id'];
               $i++;
               $n--;
            }
            echo "<tr><td></td><td></td>"?><td style="font-weight: bold"><?= "Total"."</td>"?><td style="letter-spacing: 1px;font-weight: bolder"><?= "Rs" .$sum."</td><td></td><td>"?><a href='delievery.php?id=$id' class="btn  btn-success" style="padding: 10px;">Confirm Order</a><?php "</td></tr>";
        }
        ?>
        </table>
	</div>
	</div> <hr/>
            <div class="container"><div class="row">
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