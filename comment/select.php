<?php
session_start();
include('../db.php');
$comment_sql=mysqli_query($conn,"SELECT comment.*,user.name,user.photo FROM comment INNER JOIN user ON comment.user_id=user.id WHERE comment.post_id='".$_SESSION['pid']."'");

	while ($comment=mysqli_fetch_assoc($comment_sql)) {
		echo '<div class="media mb-2">
			  <div class="media-left">
			    <img src="img/'.$comment['photo'].'" class="media-object rounded-circle m-2" width="35px" height="35px">
			  </div>
			  <div class="media-body">
			    <p>'.$comment['name'].'</p>
			    <i>'.$comment['comment'].'</i>
			  </div>
			</div>';
	}
 ?>