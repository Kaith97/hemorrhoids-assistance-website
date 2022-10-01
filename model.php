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
        <form method="POST" enctype="multipart/form-data" action="post/create.php">
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="post/update.php">
          <input type="" name="id" class="post_id">
          <input type="text" name="title" placeholder="Enter Title" class="form-control title"><br>
          <textarea name="description" placeholder="What's on your mind?" class="form-control description"></textarea><br>
          <img src="" class="w-100 photo">
          <b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
          <input type="text" name="from" value="<?php echo $user['email']; ?>" placeholder="From" class="form-control mb-2">
          <input type="text" name="subject" placeholder="Subject" class="form-control mb-2">
          <textarea name="message" rows="5" placeholder="Message" class="form-control"></textarea><br><br>
          <input type="file" name="attachment"> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-envelope-open-text mr-1"></i>Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

