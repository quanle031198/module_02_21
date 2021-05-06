<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Teaser</th>
      <th scope="col">Content</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($postDetail as $key => $post) :?>
    <tr>
      <th scope="row"><?php echo $post['id'] ?></th>
      <td><?php echo $post['title'] ?></td>
      <td><?php echo $post['teaser'] ?></td>
      <td><?php echo $post['content'] ?></td>
      <td><?php echo $post['created'] ?></td>
    </tr>
  <?php endforeach; ?>  
  </tbody>
</table>