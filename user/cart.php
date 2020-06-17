<?php
session_start();
include_once('../connection.php');
    $book_id=$_GET['id'];
    $query= "insert into cart values('','$book_id','$_SESSION[email]','')";
    if(mysqli_query($conn, $query)){  
     echo "<script>alert('Item added to cart');</script>";  
    }else{  
    echo "<script>alert('Failed to add Item');</script>";  
    }
    echo "<script>window.location='items.php'</script>";
?>
