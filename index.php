<?php include 'Connection.php';
error_reporting(E_ALL);
 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div>
        <form action="" method+="POST">
            <input type="text" name="firstname" placeholder="Firstname"> <br><br>

            <input type="text" name="lastname" placeholder="Lastname"> <br><br>

            <input type="number" name="age" placeholder="Age"> <br><br>

            <input type="submit" name="save_btn"
            value="Save">
            <button><a href="view.php">View</a></button>
        </form>
    </div>

    <?php
        if(isset($_POST['save_btn'])) {
            $fname=$_POST['firstname'];
            $lname=$_POST['lastname'];
            $age=$_POST['age'];

            $query= "INSERT IntO student
            (firstname,lastname,age)
            VALUES('$fname','
            $lname','$age')";
            $data=mysqli_query($con,$query);
            if($data){
                ?>
                <script type="text/javascript">
                    alert("Data Saved Successfully")
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
</body>
</html>
