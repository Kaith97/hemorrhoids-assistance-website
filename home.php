<!DOCTYPE html>
<html>
<head>
  <title>Haemorrhoids Assistance</title>
  <?php include('cdn.php'); ?>

<style type="text/css">
  .react{
    display: flex;
  }
  .react div{
    width: 33%;
    text-align: center;
  }
</style>

</head>
<body style="background:#E9EBEE;">
<?php include ('nav.php'); ?>
<div class="container-fluid" style="margin-top: 80px;">
  <div class="row">
   

    <div class="col-md-5">
        <div class="post_friend">
      
  

      <?php
      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $post_sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id WHERE post.user_id='$id' ORDER BY post.id DESC");
      }else{
        $post_sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id ORDER BY post.id DESC");
      }

      while($post=mysqli_fetch_assoc($post_sql)){
      ?>

      <div class="card mb-2">
        <div class="card-header bg-white">      
          <a href="" class="card-link text-dark"><img src="img/<?php echo $post['photo']; ?>" width="30px" height="30px" class="rounded-circle mr-1">
          <b><?php echo $post['name']; ?></b></a>       
          <div style="float: right;">
        <?php if($_SESSION['id']==$post['user_id']){ ?>
    
      <i class="fas fa-circle text-warning edit" data-toggle="modal" data-target="#edit_post_Modal" 
      post_id="<?php echo $post['id']; ?>"
      title="<?php echo $post['title']; ?>"
      description="<?php echo $post['description']; ?>"
      photo="<?php echo $post['post_photo']; ?>"
      ></i>
          
            <i class="fas fa-times-circle text-danger"></i>
          <?php } ?>
          </div>
        </div>
        <div class="card-body">
          <h6><?php echo $post['title']; ?></h6>
          <p class="text-justify"><?php echo $post['description']; ?></p>
          <?php if($post['post_photo']){ ?>
          <img src="img/<?php echo $post['post_photo']; ?>" width="100%;">
          <?php } ?>
        </div>
        <div class="card-footer react bg-white">
          <div>
            <?php
            $like_sql1=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='".$post['id']."' AND user_id='".$_SESSION['id']."'");
            if(mysqli_num_rows($like_sql1) > 0){
            ?>
            <i class="fas fa-thumbs-up mr-1 text-primary unlike" post_id="<?php echo $post['id']; ?>"></i>
          <?php }else{ ?>
            <i class="fas fa-thumbs-up mr-1 like" post_id="<?php echo $post['id']; ?>"></i>
          <?php } ?>

          <span class="badge badge-light" id="likearea<?php echo $post['id']; ?>">
          <?php
          $like_sql=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='".$post['id']."'");
          echo mysqli_num_rows($like_sql);
          ?>  
          </span></div>
          <div><a href="comment.php?id=<?php echo $post['id']; ?>" class="text-dark card-link"><i class="far fa-comment-alt mr-1"></i>Comment</a></div>
          <div><i class="fas fa-share mr-1"></i></i>Share</div>
        </div>
      </div>
    <?php } ?>


      </div>
    </div>


    <div class="col-md-3">
      <?php include('popular.php'); ?>  
    </div>

    <div class="col-md-2 online_area">
      
    </div>
  </div>
</div>
<script type="text/javascript">
  $('.edit').click(function(){
    var post_id=$(this).attr('post_id');
    var title=$(this).attr('title');
    var description=$(this).attr('description');
    var photo=$(this).attr('photo');
    $('.post_id').val(post_id);
    $('.title').val(title);
    $('.description').val(description);
    $('.photo').attr('src',"img/"+photo);
  });

  $(document).ready(function(){
    $('.like').click(function(){
      var id=$(this).attr('post_id');
      $(this).toggleClass('like');//remove like
      if($(this).hasClass('like'))
      {
        $(this).removeClass('text-primary');
      }else{
        $(this).addClass('text-primary');
      }

      $.ajax({
        url:"like_unlike/action.php",
        type:"POST",
        data:{id},
        success:function(){
          likeCount(id);
        }
      });
    });
    $('.unlike').click(function(){
      var id=$(this).attr('post_id');
      $(this).toggleClass('unlike');
      if($(this).hasClass('unlike'))
      {
        $(this).addClass('text-primary');
      }else{
        $(this).removeClass('text-primary');
      }

      $.ajax({
        url:"like_unlike/action.php",
        type:"POST",
        data:{id},
        success:function(){
          likeCount(id);
        }
      });
    });

    function likeCount(id)
    {
      var id=id;
      $.ajax({
        url:"like_unlike/count.php",
        type:"POST",
        data:{id},
        success:function(data)
        {
          $('#likearea'+id).text(data);
        }
      });
    }

  })
  $(document).ready(function(){
    $('.online_area').load('online.php');
    onlineRefresh();
  });

  function onlineRefresh()
  {
    setTimeout(function(){
      $('.online_area').load('online.php');
      onlineRefresh();
    },1000);
  }
</script>
<?php include('modal.php'); ?>
</body>
</html>