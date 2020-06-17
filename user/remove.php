<?php
session_start();
include_once('../connection.php');
    $book_id=$_GET['id'];
    $query= "delete from cart where user_email='$_SESSION[email]' AND book_id='$book_id'";
    if(mysqli_query($conn, $query)){  
     echo "<script>alert('Item removed from cart');</script>";  
    }else{  
    echo "<script>alert('Failed to remove Item');</script>";  
    }
    echo "<script>window.location='cartitems.php'</script>";
?>
