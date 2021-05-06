
<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Add Post</h1>
      </div>
      <div class="col-12">
          <form method="POST">
              <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title"  placeholder="Nhập title" required>
              </div>
              <div class="form-group">
                  <label>Teaser</label>
                  <textarea class="form-control" name="teaser" placeholder="Nhập teaser" required></textarea>
              </div>
              <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" placeholder="Nhập content" required></textarea>
              </div>
              <div class="form-group">
                  <label>Created</label>
                  <input type="date" class="form-control" name="created" required>
              </div>

              <button type="submit" class="btn btn-primary">Thêm mới</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>       
     </div>   
   </div> 
</div> 