<?php
if (isset($_POST['to'])) {
	$to=$_POST['to'];
	$form="From :".$_POST['form'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	mail($to,$subject,$message,$form);
	header("location:friend.php");
}
 ?>