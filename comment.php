<!DOCTYPE html>
<html>
<head>
	<title>Lobelia</title>
	<style type="text/css">
	.comment_box{
	border:none;
    resize: none;
    width: 98%;
  	height: 34px;
    outline:none;
    padding:5px 15px;
	}
	.comment_area{
		height: 300px;
		overflow-y: scroll;
	}
	.comment_area::-webkit-scrollbar {
    display: none;
}



	</style>
	<?php include('cdn.php'); ?>

</head>
<body style="background:#E9EBEE;">
<?php include ('nav.php'); ?>
<div class="container-fluid" style="margin-top: 80px;">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-5">

			<?php
			if (isset($_GET['id'])) {
				$id=$_GET['id'];
				$_SESSION['pid']=$id;
				$post_sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id WHERE post.id='$id'");

				$post=mysqli_fetch_assoc($post_sql);
			}
			 ?>

			<div class="card">
				<div class="card-header bg-white">	
				<a href="" class="card-link text-dark">		
					<img src="img/<?php echo $post['photo']; ?>" height="30px" width="30px" class="rounded-circle mr-1">
					<b><?php echo $post['name']; ?></b></a>				
				</div>
				<div class="card-body">
					<h6><?php echo $post['title']; ?></h6>
					<p class="text-justify"><?php echo $post['description']; ?></p>
					<?php if($post['post_photo']) {?>
					<img src="img/<?php echo $post['post_photo']; ?>" width="100%;">
				<?php }?>
				</div>
			</div>


		</div>
		<div class="col-md-3">
			
			<div class="card">
				<div class="card-body">
					<div class="comment_area">

			

					</div>

					<div class="media pt-2 px-3 border-top">
  					<img src="img/4.png" height="35px" width="35px" class="rounded-circle">
  					<div class="media-body">
  						<input type="hidden" name="" class="post_id" value="<?php echo $post['id'] ?>">
    					<input class="comment_box ml-2" placeholder="Write a comment..."></input>
  					</div>
				</div>

				</div>
			</div>

		</div>
	</div>
</div>
<script>
	$('.comment_box').change(function(){
		var comment=$(this).val();
		var post_id=$('.post_id').val();
		$.ajax({
			url:'comment/insert.php',
			type:'POST',
			data:{post_id,comment},
			success:function(){
				$('.comment_box').val("");
			}
		})
	})

	$(document).ready(function(){
		$('.comment_area').load('comment/select.php');
			commentRefresh();
	});

	function commentRefresh(){
		setTimeout(function(){
			$('.comment_area').load('comment/select.php');
			commentRefresh();
		},1000);
	}

	
</script>

</body>
</html>