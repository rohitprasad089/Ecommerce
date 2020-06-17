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
    <li class="breadcrumb-item active" aria-current="page">Update</li>
</ol>
<h2>UPDATE</h2>  
</nav>
<div class="data">
<center><h4 class="mt-3"><u>UPDATE INFORMATION</u></h4></center>
<div class="row justify-content-center">
<div class="card py-3 px-5 mb-3 col-s-12 col-md-8">
	<form method="POST"enctype="multipart/form-data">
        <input type="text" name="price" class="form-control m-2" id="" placeholder="Price" required>
        <input type="text" name="qty" class="form-control m-2" id="" placeholder="Quantity" required>
 <center><input type="submit" name="submit" class="btn btn-primary mt-2" value="UPDATE">
  <button type="reset" class="btn btn-primary mt-2">RESET</button></center>
    </form>
</div>
</div>
</div>
<?php
 include('../user/footer.htm');
 ?>
<?php
if (isset($_POST['submit'])){
  $query=mysqli_query($conn,"UPDATE bookdata SET price='$_POST[price]', totalqty='$_POST[qty]', availableqty='$_POST[qty]' WHERE id='$_GET[id]'");
  if ($query) {?>
    <script>
        alert("Record updated successfully");
        window.location="inventory.php";
    </script>
    <?php
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
?>
