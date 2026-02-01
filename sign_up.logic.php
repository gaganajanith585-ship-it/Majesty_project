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

        //Checking whether email already have an account 

        $checkEmail = "SELECT id from users WHERE email = '$email'";
        $checkResult = mysqli_query($conn,$checkEmail);

        if(mysqli_num_rows($checkResult) >0 ) 
            {
                echo 
                    "<script>
                        alert('This email is already registered ! \\n\\nYou will be redirected to login page !');
                        window.location.href='login.html';
                    </script>";
                exit();
            }

        // Insert new user
        $sql = "insert into users(name,email,address,mobile,password,role) 
        values('$name','$email','$address','$mobile','$password','$role')";
        $result = mysqli_query($conn,$sql);

        if(!$result)
            {
                echo    
                    "<script>
                        alert('Registeration Failed {$conn->error}');
                        window.history.back();
                    </script>";
            }
        else
            {
                echo 
                    "<script>
                        alert('Registered Successfully');
                        window.location.href='home.html';
                    </script>" ; 
            }


    }
?>
