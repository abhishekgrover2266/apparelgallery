<?php
include 'includes/common.php';
$id=$_GET['id'];
$u_id = $_SESSION['id'];
$q="SELECT * FROM users_items WHERE user_id=$u_id AND item_id=$id AND status= '0'";
$q1= mysqli_query($con, $q) or die(mysqli_error($con));
$n=mysqli_num_rows($q1);
if($n == 0){
    $query="INSERT INTO users_items(user_id,item_id,qty,status) VALUES('$u_id', '$id','1',' 0')";
    $q4= mysqli_query($con, $query) or die(mysqli_error($con));
} else {
    $q2= mysqli_fetch_array($q1);
    $qty=1+$q2['qty'];
    $query2="update users_items set qty=$qty where user_id='$u_id' AND item_id='$id' AND `status`= '0' ";
    $q3= mysqli_query($con, $query2);
   
}

    header('location:home.php');
?>

