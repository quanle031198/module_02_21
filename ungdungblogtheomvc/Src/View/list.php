<h2>Danh sách post</h2>
<a class="nav-link" href="./index.php?page=add">Add Post<span class="sr-only">(current)</span></a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Title</th>
      <th scope="col">Teaser</th>
      <th scope="col">Created</th>
      <th scope="col">View</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($postList as $key => $post) :?>
    <tr>
      <th scope="row"><?php echo ++$key ?></th>
      <td><?php echo $post['title'] ?></td>
      <td><?php echo $post['teaser'] ?></td>
      <td><?php echo $post['created'] ?></td>
      <td><a href="./index.php?page=view&id=<?php echo $post['id']; ?>" class="btn btn-warning btn-sm">Detail</a></td>
      
      <td><a href="./index.php?page=delete&id=<?php echo $post['id']; ?>" class="btn btn-warning btn-sm">Delete</a></td>
      <td><a href="./index.php?page=edit&id=<?php echo $post['id']; ?>" class="btn btn-warning btn-sm">Edit</a></td>
    </tr>
  <?php endforeach; ?>  
  </tbody>
</table>