<?php include 'Connection.php';
error_reporting(E_ALL);
?>
<a href="index.php">Home</a>

<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php
    $query="SELECT * FROM student";
    $data= mysqli_query($con,$query);
    $result=mysqli_num_rows($data);
    print_r($result);
    if ($result)   {

        while ($row=mysqli_fetch_assoc($data)) {
            ?>
           <tr>
            <td><?php echo $row['firstname'];?>
            </td>
             <td><?php echo $row['lastname'];?>
            </td>
             <td><?php echo $row['age'];?></td>
              <td> <a href="update.php?id=<?php echo
              $row['id'];?>"></a></td>

              <td><a onclick="return confrim('Are You Sure,You Want To Delete?')"
                 href="delete.php?id=<?php echo
              $row['id']?>">Delete</a></td>

           </tr>
            <?php
        }
    }
    else
    {
    ?>
    <tr>
        <td>No Record Found</td>
    </tr>
    <?php
}
     ?>
</table>
