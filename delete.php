<<?php include 'Connection.php';
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($con,$query);
if ($data) {
  ?>
  <script type="text/javascript">
  alert("Data Delete Successfully")

  window.open("http://localhost/cy/view.php","
  _self");

  </script>
  <?php
  // code...
}
else {
  // code...?>
  <script type="text/javascript">

  alert("Please Try Again");

  </script>
  <?php
}
