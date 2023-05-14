<div class="alert bg-white pop">
				<b>Popular Posts/Authors</b><hr>
				<?php
				$popular_sql=mysqli_query($conn,"SELECT post_id FROM like_data");
				$a="";

				while($popular=mysqli_fetch_assoc($popular_sql)){

					$a.=$popular['post_id'].',';

				}
				$b=substr($a,0,-1);

				$c=explode(',',$b);
				$d=array_count_values($c);
				arsort($d);
				$e=array_keys($d);
				$f=array_slice($e,0,3);
				foreach ($f as $key => $value) {
					
					$pop_sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo 
						FROM post INNER JOIN user ON post.user_id=user.id WHERE post.id=$value");
					$pop=mysqli_fetch_assoc($pop_sql);

				 ?>
				
			<div class="media border mb-2">
				<a href="" class="card-link text-dark">
			  <div class="media-left">
			  	<?php
			  		if ($pop['post_photo']) {
			  			
			  		
			  	 ?>
			    <img src="img/<?php echo $pop['post_photo']; ?>" class="media-object my-2 ml-2" width="120px">
			<?php }?>
			  </div>
			  <div class="media-body ml-2">
			    <h6 class="media-heading mt-3"><?php echo $pop['title'] ?></h6> 
			    <small><?php echo substr($pop['description'],0,70) ;?></small></a><br>

			    <a href="" class="text-dark"><small>Posted by : <b><?php echo $pop['name'] ?></b></small>
			    <img src="img/<?php echo $pop['photo'] ?>" class="rounded-circle float-right mr-2 mb-1" width="30px" height="30px">
			    </a>
			  </div>
			</div>
		<?php } ?>


</div>