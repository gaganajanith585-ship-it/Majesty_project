<?php
include "db.php";
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $role = "user";

        $sql = "insert into users(name,email,address,password,role) 
        values('$name','$email','$password','$address','$role')";
        $result = mysqli_query($conn,$sql);

        if(!$result)
            {
                echo "Error! : {$conn->error}";
            }
        else
            {
                echo "Registed Successfully!" ; 
            }


    }
?>
