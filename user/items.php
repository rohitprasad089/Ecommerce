<?php
/*session_start();
if(!isset($_SESSION['email']))
{
    include('header.htm');
}
else{
    <script>

    </script>
}*/
include('header.php');
include_once('../connection.php');
?>
    <!--contents-->
    <div class="content container-fluid">
        <div class="row m-4">
            <div class="col-12 card">
                <h3>Filters</h3>
                <hr>
                <form method=get id=price_range style="display: inline-flex;">
                <b>price range : </b>
                <input type="text" id="minvalue"  name="minvalue" readonly>
                <div id="sliderrange"></div>
                <input type="text" id="maxvalue" name="maxvalue" readonly>
                <input type="submit" name="submit" value="Apply" class="btn btn-danger px-3">
                </form>
            </div>
        </div>
    <?php
if(isset($_GET['submit']))
{
$min=$_GET['minvalue'];
$max=$_GET['maxvalue'];
echo "<h4><b>Showing results between ". $min." to " .$max ."</b></h4>";
$res=mysqli_query($conn,"SELECT * from bookdata where price between 0+'$min' AND 1000+'$max'");
echo '<div class="row m-4">';
$count=0;
while($row=mysqli_fetch_array($res))
{
?>
<div class="card itembox2 col-sm-12 col-md-2 m-3">
<img src="<?php echo $row['bookimage'];?>" height="200" width="auto">
<div><?php echo $row["bookname"]; ?></div>
<p><?php echo $row["price"];?></p>
<?php
    if(!isset($_SESSION['email']))
    {
		echo '<script>window.alert("Please Login To Continue");</script>';
	}
	else{
		?>
		<a href="user/cart.php?id=<?php echo $row['id'];?>"><button type=button name="cart" class="btn bg-warning m-2"><i class="fas fa-shopping-cart"></i><span class="addcart"></span></button></a>
	<?php
	}
 ?><button type=button name="buy" class="btn bg-danger mx-2"><span class="buynow"></span></button>
</div>
<?php
$count+=1;
}
if($count==0){
    echo "<b>Sorry No Items Found<b>";
}
}
else{
$res=mysqli_query($conn,"SELECT * from bookdata");
echo '<div class="row m-4">';
while($row=mysqli_fetch_array($res))
{
?>
<div class="card itembox2 col-sm-12 col-md-2 m-3">
<img src="<?php echo $row['bookimage'];?>" height="200" width="auto">
<div><?php echo $row["bookname"]; ?></div>
<p><?php echo $row["price"];?></p>
 <a href="cart.php?id=<?php echo $row["id"]; ?>"><button type=button name="cart" class="btn bg-warning m-2"><i class="fas fa-shopping-cart"></i><span class="addcart"></span></button></a>
 <button type=button name="buy" class="btn bg-danger mx-2"><span class="buynow"></span></button>
</div>
<?php
}
}
?>
</div>
</div>
</div>
<?php
include('footer.htm');
?>