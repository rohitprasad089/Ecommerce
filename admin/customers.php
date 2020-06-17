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
    <li class="breadcrumb-item active" aria-current="page">User Info</li>
</ol>
<h2>USER INFORMATION</h2>  
</nav>
<div class="container-fluid p-5">
  <?php
    $res=mysqli_query($conn,"select * from customer");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"Id";echo"</th>";
    echo"<th>";echo"Fullname";echo"</th>";
    echo"<th>";echo"Phone";echo"</th>";
    echo"<th>";echo"Postal Code";echo"</th>";
    echo"<th>";echo"Address";echo"</th>";
    echo"<th>";echo"Email";echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";echo $row["id"];echo"</td>";
    echo"<td>";echo $row["fullname"];echo"</td>";
    echo"<td>";echo $row["phone"];echo"</td>";
    echo"<td>";echo $row["postal_code"];echo"</td>";
    echo"<td>";echo $row["address"];echo"</td>";
    echo"<td>";echo $row["email"];echo"</td>";
   echo"</tr>";
    }
    echo"</table>";
    echo"</div>";
?>
</div>
<?php
 include('../user/footer.htm');
 ?>