<?php
include_once("../connection.php");
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $query1=mysqli_query($conn,"DELETE FROM bookdata WHERE id=$id");
  if($query1)
    {
    ?><script>
    alert("Book deleted successfully");
    window.location="inventory.php";
    </script>
    <?php
    }
}
?>