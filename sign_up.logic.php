<?php
include "db.php";
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $role = "user";

        $sql = "insert into users(name,email,address,mobile,password,role) 
        values('$name','$email','$address','$mobile','$password','$role')";
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
