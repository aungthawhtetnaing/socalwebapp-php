<?php
session_start();
include("../db.php");
if (isset($_POST)) {
	$title=$_POST['title'];
	$description=$_POST['description'];
	$photo=$_FILES['photo']['name'];

	$exe=pathinfo($photo,PATHINFO_EXTENSION);
	$a=uniqid().'.'.$exe;

	$tmp=$_FILES['photo']['tmp_name'];
	if ($photo) {
		move_uploaded_file($tmp,"../img/$a");
	}
	mysqli_query($conn,"INSERT INTO post (title,description,post_photo,user_id,created_date,modified_date) VALUES('$title','$description','$a','".$_SESSION['id']."',now(),now())");
	header("location:../home.php");
}
 ?>