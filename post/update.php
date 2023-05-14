<?php 
include('../db.php');
if (isset($_POST['id'])) {
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$dp_name=$_POST['dp_name'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	if ($photo) {
		move_uploaded_file($tmp,"../img/$photo");
		$sql="UPDATE post SET title='$title',description='$description',post_photo='$photo',modified_date=now() WHERE id='$id' ";
		mysqli_query($conn,$sql);
	}else if($dp_name){
		$sql="UPDATE post SET title='$title',description='$description',post_photo='',modified_date=now() WHERE id='$id' ";
		mysqli_query($conn,$sql);
		unlink("../img/".$dp_name);
	}else
	{
		move_uploaded_file($tmp,"../img/$photo");
		$sql="UPDATE post SET title='$title',description='$description',modified_date=now() WHERE id='$id' ";
		mysqli_query($conn,$sql);
	}
	
	
	
	header("location:../home.php");
}
?>