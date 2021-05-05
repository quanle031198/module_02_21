
<h2>Kết quả tìm tiếm !</h2>
<table class="table">
  <thead>
    <tr>
      <th>STT</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Producer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($product as $key => $product) : ?>
      <tr>
        <td><?php echo ++$key;  ?></td>
        <td><?php echo $product['name'] ?></td>
        <td><?php echo $product['description'] ?></td>
        <td><?php echo $product['price'] ?></td>
        <td><?php echo $product['producer'] ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product['id']; ?>" class="btn btn-sm">Update</a></td>
      <?php endforeach; ?>
  </tbody>
</table>