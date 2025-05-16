<?php include 'Connection.php';
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp  = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if(move_uploaded_file($file_tmp, "upload-images/" . $file_name)){
        echo "Successfully uploaded.";
    } else {
        echo "Could not upload the file.";
    }
}
?>

<html>
    <body>
    <form action="index.html" method="post" enctype="multipart/form-data">
      <input type="file" name="imge" /> <br><br>
      <input type="submit" />
    </form>
  </body>
</html>
