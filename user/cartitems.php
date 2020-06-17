<?php
include('header.php');
if(!isset($_SESSION['email']))
{
    echo "<script>window.alert('Please Login to access') </script>"; 
    echo "<script>window.location('../index.php') </script>"; 
}
?>
<nav aria-label="breadcrumb" class="bg-info px-5 py-3 my-1">
  <ol class="breadcrumb bg-info">
    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
</ol>
<h2>Shopping Cart</h2>  
</nav>
<div class="container-fluid">
    <div class="row mx-5 my-2">
    <div class="card col-md-9 p-2">
        <?php
        $count=0;
        $totalprice=0;
    $res=mysqli_query($conn,"SELECT * FROM cart INNER JOIN bookdata ON cart.book_id=bookdata.id where user_email='$email'");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-light bg-success'>";
    while($row=mysqli_fetch_array($res))
{
echo"<tr>";
echo"<td>";?><img src="<?php echo $row["bookimage"];?>" height="100" width="100"><?php echo"</td>";
echo"<td>";echo $row["bookname"];echo"</td>";
echo"<td>";echo $row["author"];echo"</td>";
echo"<td>";echo $row["publication"];echo"</td>";
echo"<td>";echo $row["availableqty"];echo"</td>";
echo"<td>";echo $row["price"];echo"</td>";
echo"<td><a href='remove.php?id=$row[book_id]'>Remove</a></td>";
echo"</tr>";
$count++;
$totalprice+=$row["price"];
}
echo"</table>";
if($count==0)
{
  echo "<h3>Sorry no items in the cart</h3>";
}
echo"</div>";
echo"</div>";
if($count>0)
{
?>
    <div class=" card col-md-3 p-5">
    <h2>TOTAL:</h2>
    <h3>&#8377<span><?php echo $totalprice;?></span></h3>    
    <hr>
    <button class="btn btn-warning mt-4">Checkout</button>
    </div>
<?php
}
?>
    </div>
</div>
<?php
include('footer.htm');
?>