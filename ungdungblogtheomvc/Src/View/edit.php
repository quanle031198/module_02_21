<h2>Cập nhật posts</h2>
<form method="POST" action="./index.php?page=edit">
  <input type="text" name="id" value="<?php echo $posts['id']; ?>"/>
  <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" value="<?php echo $posts['title']; ?>" class="form-control"/>
  </div>
  <div class="form-group">
      <label>Teaser</label>
      <textarea name="teaser" class="form-control"><?php echo $posts['teaser']; ?></textarea>
  </div>
  <div class="form-group">
      <label>Content</label>
      <textarea name="content" class="form-control"><?php echo $posts['content']; ?></textarea> 
  </div>
  <div class="form-group">
      <label>Created</label>
      <input type="date" name="created" class="form-control" value="<?php echo $posts['created']; ?>"/>
  </div>
  <div class="form-group">
      <input type="submit" value="Update" class="btn btn-primary"/>
      <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>