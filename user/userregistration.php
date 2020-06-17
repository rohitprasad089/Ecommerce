<?php
include('header.php');
?>
  <!--content-->
  <div class="container data  my-5">
    <h2>REGISTRATION FORM</h2>
    <div class="card p-4 my-2">
	<form action="#" method="POST" enctype="multipart/form-data" class=" justify-content-center">
  <div class="row ">
    <div class="form-group col-md-4">
      <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" required>
    </div>
	<div class="form-group col-md-4">
      <input type="number" class="form-control" name="phone" id="inputPhone" placeholder="phone" required>
    </div>	
    <div class="form-group col-md-4 ">
      <input type="text" class="form-control" id="inputZip" name="pin" placeholder="Zip" required>
    </div>
  <div class="form-group col-md-12">
       <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" required>
  </div>
  <div class="form-group col-md-4">
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control " name="password" id="inputPassword4" placeholder="Password" required>
    </div>
    <div class="form-group col-md-4">
      <input type="password" class="form-control " id="inputPassword4" placeholder="Confirm password" required>
    </div>
	</div>
  <input type="submit" name="signup" class="btn btn-primary" value="Sign Up">
  <input type="reset" class="btn btn-primary" value="Reset">
</form>
<?php
include_once('../connection.php');
if(isset($_POST['signup']))
{

  $query="insert into customer values('','$_POST[fullname]','$_POST[phone]','$_POST[pin]','$_POST[address]','$_POST[email]','$_POST[password]')";
  if(mysqli_query($conn,$query))
  {
   echo '<script>alert("Registration successfull")</script>';
   echo '<script>window.location("userlogin.php")</script>';
  }
  else{  
    echo '<script>alert("Registration Failed")</script>'; 
  }
}
?>
</div>
</div>
<?php
include('footer.htm')
?>
