<?php      
    include('connection.php'); 
    $username = $_POST['name'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $email = stripcslashes($email);
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $email = mysqli_real_escape_string($con, $email);  
      
        $sql = "insert into registration(username,email,password) values('$username', '$email', '$password')";
        $result = mysqli_query($con, $sql);
        if($result){ 
            echo '<script>alert("Registration complete")</script>';   
            header("Location: login.html"); 
            exit;
        }  
        else{  
            echo '<script>alert("Registration failed")</script>';  
        }     
?>