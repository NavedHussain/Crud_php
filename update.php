<?php include 'Connection.php';
$id=$_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
// error_reporting(E_ALL);
?>
<div>
    <form action="" method="POST">
      <input type="text" name="firstname" placeholder="Firstname" value="
      <?php echo htmlspecialchars($row['firstname']); ?>">
 <br><br>

        <input type="text" name="lastname"
         placeholder="Lastname"
         value="<?php echo htmlspecialchars($row['lastname']); ?>"
         <br><br>

        <input type="number" name="age" placeholder="
        Age" value="<?php echo $row['age'] ?>">
        <br><br>

        <input type="submit" name="update_btn"value=
        "Update">
       <!-- <button><a href="view.php"><button type="button">Back</button></a> -->
        <button type="button" onclick="window.location.href='view.php'">Back</button>


    </form>
</div>
<?php
    if(isset($_POST['update_btn'])) {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];

        $update="UPDATE student SET firstname='$fname'
        ,lastname='$lastname',age='$age' WHERE id= '$id'";
        echo $update; exit;
        $data=mysqli_query($con,$update);
        if($data){
            ?>
            <script type="text/javascript">
                alert("Data Update Successfully")
                window.open("http://localhost/Crud_php/view.php",
              "_self");
            </script>
            <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Please try Again")
        </script>
        <?php

    }
}
?>
