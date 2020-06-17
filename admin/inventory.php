<?php
 include('header.php');
 if(!isset($_SESSION['username']))
{
  header('location:login.php');
}
 ?>
  <nav aria-label="breadcrumb" class="bg-warning px-5 py-3 my-1">
  <ol class="breadcrumb bg-warning">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Books Inventory</li>
</ol>
<h2>BOOKS INVENTORY</h2>  
</nav>
<div class="container-fluid p-2">
<div class="row justify-content-center">
<div class="card py-3 mb-3 col-s-12 col-md-9 ">
 <form class="" method="POST">
 <input type="text" class="form-control my-2" name="t1" placeholder="Enter book name for search">
 <input type="submit" class="form-control btn-primary" name="submit">
 </form>
</div>
<div class="m-3">
  <?php
  if(isset($_POST["submit"]))
  {
    $res=mysqli_query($conn,"select * from bookdata where bookname like('%$_POST[t1]%')");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"bookname";echo"</th>";
    echo"<th>";echo"image";echo"</th>";
    echo"<th>";echo"author";echo"</th>";
    echo"<th>";echo"publication";echo"</th>";
    echo"<th>";echo"price";echo"</th>";
    echo"<th>";echo"quantity";echo"</th>";
    echo"<th>";echo"available_quantity";echo"</th>";
    echo"<th>";echo"category";echo"</th>";
    echo"<th>";echo"subcategory";echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";echo $row["bookname"];echo"</td>";
    echo"<td>";?><img src="<?php echo $row["bookimage"];?>" height="100" width="100"><?php echo"</td>";
    echo"<td>";echo $row["author"];echo"</td>";
    echo"<td>";echo $row["publication"];echo"</td>";
    echo"<td>";echo $row["price"];echo"</td>";
    echo"<td>";echo $row["totalqty"];echo"</td>";
    echo"<td>";echo $row["availableqty"];echo"</td>";
    echo"<td>";echo $row["category"];echo"</td>";
    echo"<td>";echo $row["subcategory"];echo"</td>";
    echo"</tr>";
    }
    echo"</table>";
    echo"</div>";
  }
  else{
    $res=mysqli_query($conn,"select * from bookdata");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"bookname";echo"</th>";
    echo"<th>";echo"image";echo"</th>";
    echo"<th>";echo"author";echo"</th>";
    echo"<th>";echo"publication";echo"</th>";
    echo"<th>";echo"price";echo"</th>";
    echo"<th>";echo"quantity";echo"</th>";
    echo"<th>";echo"available_quantity";echo"</th>";
    echo"<th>";echo"category";echo"</th>";
    echo"<th>";echo"subcategory";echo"</th>";
    echo"<th>";echo"Update Book";echo"</th>";
    echo"<th>";echo"Delete Book";echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";echo $row["bookname"];echo"</td>";
    echo"<td>";?><img src="<?php echo $row["bookimage"];?>" height="100" width="100"><?php echo"</td>";
    echo"<td>";echo $row["author"];echo"</td>";
    echo"<td>";echo $row["publication"];echo"</td>";
    echo"<td>";echo $row["price"];echo"</td>";
    echo"<td>";echo $row["totalqty"];echo"</td>";
    echo"<td>";echo $row["availableqty"];echo"</td>";
    echo"<td>";echo $row["category"];echo"</td>";
    echo"<td>";echo $row["subcategory"];echo"</td>";
   /* echo"<td>";?><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deletebook.php?id=<?php echo $row["id"]; ?>">delete</a><?php echo"</td>"; */
   echo "<td><a onClick=\"javascript: return confirm('Please confirm update');\" href='update.php?id=".$row["id"]."'>update</a></td>"; 
   echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deletebook.php?id=".$row["id"]."'>delete</a></td>"; 
    echo"</tr>";
  
  }
    echo"</table>";
    echo"</div>";
  }
  ?>
  </div></div></div>
  <?php
 include('../user/footer.htm');
 ?>