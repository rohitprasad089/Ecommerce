<?php
 include('header.php');
 include('../connection.php');
 /* refreshing room data or checkout*/
 ?>
<!--login form-->
<div class="container">
<div class="row justify-content-center my-5">
<div class="card col-4 card1">
<center><i class="fas fa-users fa-5x"></i></center>
<hr>
<form method="post" class="p-3">
  <div class="form-group">
    <label for="exampleInputusername1">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputusername1" aria-describedby="usernameHelp">
    <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
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
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql=mysqli_query($conn,"select * from adminlogin where username='$username' && password='$password'");
        $count=0;
        $count=mysqli_num_rows($sql);
        if($count==0)
		{?>
		<p style="color:white; text-align:center; background-color:red;margin:auto; padding:5px;border-radius:5px;">Invalid user</p>
	<?php	}
		else{
    $_SESSION['username']=$_POST['username'];
   ?>
     <script>
     alert('welcome');
	   window.location('dashboard.php');
     </script>     
     <?php
  }}
else{} ?>

</div>
</div>
</div>
<?php
 include('../user/footer.htm');
 ?>