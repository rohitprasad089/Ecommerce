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
    <li class="breadcrumb-item active" aria-current="page">Add books</li>
</ol>
<h2>ADD BOOKS</h2>  
</nav>
<div class="container">
<div class="row justify-content-center my-5">
<div class="card p-5 col-s-12 col-md-9">
<form method="post" class="justify-content-center" enctype="multipart/form-data" >
<input type="text" name="name" class="form-control m-2" id="" placeholder="Book_name" required>
<input type="text" name="file" class="form-control m-2" onfocus="(this.type='file')" placeholder="Book Image" required>
<input type="text" name="author" class="form-control m-2" id="" placeholder="Author" required>
<input type="text" name="publication" class="form-control m-2" id="" placeholder="Publication" required>
<input type="text" name="price" class="form-control m-2" id="" placeholder="Price" required>
<input type="text" name="qty" class="form-control m-2" id="" placeholder="Quantity" required>
<select type="select" name="category" class="form-control m-2">
    <option>Category</option>    
    <option>NCERT</option>
    <option>COMPETITIVE</option>
    <option>FICTION</option>
    <option>RELIGIOUS</option>
</select>
<input type="text" name="subcategory" class="form-control m-2" id="" placeholder="subcategory" required>
<center>
<button type="reset" name="reset" class="btn btn-primary mt-3">Reset</button>
<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
</center>
</form>
</div>
</div>
</div>
<?php
 include('../user/footer.htm');
 ?>
<?php
if(isset($_POST['submit']))
  { 
    $files=$_FILES['file'];
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
    $dst='../books_image/'.$filename;
    move_uploaded_file($filetmp,$dst);
  $query=mysqli_query($conn,"insert into bookdata values ('','$dst','$_POST[name]','$_POST[author]','$_POST[publication]','$_POST[category]','$_POST[subcategory]','$_POST[price]','$_POST[qty]','$_POST[qty]')");
  if($query){  
  echo"<script>alert('Book Inserted Successfully')</script>";
  }
  else
  {
    echo'<script>alert("Insertion Failed")</script>';
  }
}
