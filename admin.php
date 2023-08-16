<?php require 'function.php'; ?>
<html>
  <head>
  </head>
  <body>
    <form enctype="multipart/form-data" action="" method="post">
      Image
      <input type="file" name="image" required> <br>
      <button type = "submit" name = "add">Add</button>
    </form>
    <br>
    <table border = 1 cellspacing = 0 cellpadding = 5>
      <tr>
        <td>#</td>
        <td>Image</td>
        <td>Action</td>
      </tr>
      <?php
      $images = mysqli_query($conn, "SELECT * FROM images");
      $i = 1;

      foreach($images as $image) :
      ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><img src="uploads/<?php echo $image['image']; ?>" width="250"></td>
        <td>
          <form class="" action="" method="post">
            <button type="submit" name="delete" value = <?php echo $image['id']; ?>>Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
