<!-- ................Create Posts Modal................ -->
<div class="modal fade" id="create_post_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-plus-circle"></i> Create Posts</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="post/insert.php" enctype="multipart/form-data">
        	<input type="text" name="title" placeholder="Enter Title" class="form-control"><br>
        	<textarea name="description" placeholder="What's on your mind?" class="form-control"></textarea><br>
        	<b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Create</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Edit Posts Modal................ -->
<div class="modal fade" id="edit_post_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-edit"></i> Edit Posts</b></h5>
        <button type="button" class="close cancel_btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form method="POST" action="post/update.php" enctype="multipart/form-data">
          <input type="hidden" name="id" class="id">

           <input type="hidden" name="dp_name" class="dp_name">

          <input type="text" name="title"    placeholder="Enter Title" class="title form-control"><br>
          <textarea name="description" placeholder="What's on your mind?" class="description form-control"></textarea><br>
          <button type="button" class="btn btn-warning btn-sm pd_btn">Photo Delete</button>
          <img src="" class=" photo w-100">
          <b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="cancel_btn btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i> Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Mail Modal................ -->
<div class="modal fade" id="mail_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-envelope-open-text mr-1"></i>Mail Form</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="mail.php">
          <input type="text" name="to" placeholder="To:" class="to form-control mb-2">
          <input type="text" name="form" placeholder="From" class="form-control mb-2" value="<?php echo $user['email']; ?>">
          <input type="text" name="subject" placeholder="Subject" class="form-control mb-2">
          <textarea name="message" rows="5" placeholder="Message" class="form-control"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-envelope-open-text mr-1"></i>Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Search Modal................ -->
<div class="modal fade" id="search_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-search mr-1"></i>Searched Results</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button class="btn btn-outline-info all_btn" btn-sm>All</button>
        <button class="btn btn-outline-info people_btn" btn-sm>People</button>
        <button class="btn btn-outline-info posts_btn" btn-sm>Posts</button>
        
        
         <div class="search_result"></div> 


       
      

      </div>
    </div>
  </div>
</div>
<script>
  $('.pd_btn').click(function(){
    $('.photo').hide();
    var dp_name=$(this).val();
    $('.dp_name').val(dp_name);

    $('.cancel_btn').click(function(){
     $('.dp_name').val("");

    })

     })

    $('.all_btn').click(function(){
      $('.people,.posts').show();
    })

     $('.people_btn').click(function(){
      $('.people').show();
       $('.posts').hide();

    })
      $('.posts_btn').click(function(){
      $('.people').hide();
       $('.posts').show();

    })



 
</script>