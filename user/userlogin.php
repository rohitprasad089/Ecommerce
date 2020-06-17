<?php
include('header.php');
include_once('../connection.php');
?>
<!--login form-->
<div class="container">
<div class="row justify-content-center my-5">
<div class="card col-4 card1">
<center><i class="fas fa-users fa-5x"></i></center>
<hr>
<form method="post" class="p-3">
  <div class="form-group">
    <label for="exampleInputusername1">Email</label>
    <input type="email" class="form-control" name="email">
    <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">remember me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
  <div>
  </div>
</form>
<?php
if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql=mysqli_query($conn,"select * from customer where email='$email' && password='$password'");
        $count=0;
        $count=mysqli_num_rows($sql);
        if($count==0)
		{?>
		<p style="color:white; text-align:center; background-color:red;margin:auto; padding:5px;border-radius:5px;">Invalid user</p>
	<?php	}
		else{
    $_SESSION['email']=$_POST['email'];
   ?>
     <script>
     alert('welcome <?php echo $_SESSION['email'] ?>');
	   window.location('../index.php');
     </script>     
     <?php
  }}
else{} ?>

</div>
</div>
</div>

<?php
include('footer.htm');
?>