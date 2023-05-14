<?php 
include('../db.php');
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	mysqli_query($conn,"DELETE FROM post WHERE id='$id'");
	mysqli_query($conn,"DELETE FROM like_data WHERE post_id='$id'");
	header("location:../home.php");
}
?>