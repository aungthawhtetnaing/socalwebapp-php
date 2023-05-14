<?php
session_start();
include("db.php");
$sql=mysqli_query($conn,"SELECT * FROM user WHERE id='".$_SESSION['id']."'");
$user=mysqli_fetch_assoc($sql);
if (!$_SESSION['id']) {
  header("location:index.php");
}
 ?>
<nav class="navbar navbar-expand-lg shadow-sm navbar-light bg-white container-fluid fixed-top">
<div class="container">
  <a class="navbar-brand" href="home.php">
    <img src="img/brand.png" style="width:40px;">
    <b>Lobelia</b> <sub><small class="text-danger font-weight-bold">Social</small></sub></a>
  <i class="far fa-list-alt navbar-toggler left_side_btn"></i>
  <i class="fas fa-users navbar-toggler right_side_btn"></i>
  <i class="fas fa-fire navbar-toggler pop_btn"></i>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-dark font-weight-bold" href="home.php"><img src="img/<?php echo $user['photo'] ?>" class="rounded-circle mr-1" width="30px;" height="30px;"><?php echo $user['name'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fas fa-user-friends"></i></a>
      </li>
      <li class="nav-item">
        <i data-toggle="modal" data-target="#create_post_Modal" class="nav-link text-dark fas fa-plus-circle mt-1"></i>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><i class="fas fa-bell"></i></a>
      </li>
       
  
      <li class="nav-item dropdown">
        <a class="nav-link font-weight-bold text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="auth/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark"><input type="" name="" placeholder="Search Here" class="mr-1 search_input" style="display: none; width: 300px;border:none;outline: none;border-bottom: 1px solid #aaa;"><i class="fas fa-search search_btn"></i></a>
      </li>
      
      

  </div>

</div>
</nav>

<script type="text/javascript">
  $('.search_btn').click(function(){
    $('.search_input').toggle('slow');
  });
  $('.left_side_btn').click(function(){
    $('.side_left').toggle();
  })
  $('.right_side_btn').click(function(){
    $('.side_right').toggle();
    $('.post_friend').toggle();
  })
  $('.pop_btn').click(function(){
    $('.pop').toggle();
    $('.post_friend').toggle();
  })


  $('.search_input').change(function(){
    var name=$(this).val();
    $.ajax({
      url:"search.php",
      type:"POST",
      data:{name},
      success:function(data){
        $('.search_result').html(data);
        $('#search_Modal').modal('show');
        $('.search_input').val("");
      }
    })
  });
</script>