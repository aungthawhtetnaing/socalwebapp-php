<?php 
session_start();
include("../db.php");
if (isset($_POST['post_id']) && isset($_POST['comment'])) {
	$id=$_POST['post_id'];
	$comment=$_POST['comment'];
	mysqli_query($conn,"INSERT INTO comment (comment,user_id,post_id,created_date,modified_date) VALUES ('$comment','".$_SESSION['id']."','$id',now(),now())");
}
?>