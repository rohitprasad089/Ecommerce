<?php
include('header.php');
if(!isset($_SESSION['username']))
{
  header('location:login.php');
}
 ?>
<!--dashboard  contents -->
	<div class="container">
		<div class="dashboard my-5">
		<a href=""><button type="button" class="buttons btn-outline-dark"><i class="fas fa-id-badge fa-3x icons"></i><br>PROFILE</button></a>
		<a href="addbooks.php"><button type="button" class="buttons btn-outline-dark"><i class="fas fa-book fa-3x icons"></i><br>ADD BOOKS</button></a>
		<a href="inventory.php"><button type="button" class="buttons btn-outline-dark"><i class="fas fa-warehouse fa-3x icons"></i><br>INVENTORY</button></a>
		<a href="outofstock.php"><button type="button" class="buttons btn-outline-dark"><i class="fas fa-battery-empty fa-3x icons"></i><br>OUT OF STOCK</button></a>
		<a href="customers.php"><button type="button" class="buttons btn-outline-dark"><i class="fas fa-users fa-3x icons"></i><br>CUSTOMERS</button></a>
		<a href="orders.php"><button type="button" class="buttons btn-outline-dark"><i class="far fa-calendar-alt fa-3x icons"></i><br>TODAY ORDERS</button></a>
		<a href="logout.php"><button type="button" class="buttons btn-outline-dark"><i class="fas fa-sign-out-alt fa-3x icons"></i><br>LOGOUT</button></a>
		</div>
	</div>
<?php
 include('../user/footer.htm');
 ?>