<?php
include("../db.php");
if(isset($_POST))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	// $a=hash('md5',$password);
	$cpassword=$_POST['cpassword'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$photo=$_FILES['photo']['name'];//name,size,type
	$tmp=$_FILES['photo']['tmp_name'];


	if ($photo) {
		move_uploaded_file($tmp,"../img/$photo");
	}else{
		$photo="empty.png";
	}
	$query=mysqli_query($conn,"SELECT * FROM user WHERE name='$name'");
	if (mysqli_num_rows($query)>0){//count rows in database
		echo "<script>alert('Username already exit');
		window.location.href='../index.php'</script>";

	}elseif ($password == $cpassword) {
		mysqli_query($conn,"INSERT INTO user (name,email,password,cpassword,phone,dob,gender,photo,address,created_date,modified_date) VALUES('$name','$email','$password','$cpassword','$phone','$dob','$gender','$photo','$address',now(),now())");
		echo "<script>alert('Successfully Registered,Please login!');
		window.location.href='../index.php'</script>";
	}else{
		echo "<script>alert('Password do not match');
		window.location.href='../index.php'</script>";
	}
}

 ?>
