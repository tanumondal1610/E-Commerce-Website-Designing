<?php
    session_start(); // Right at the top of your script
?>
<?php    
    include('connection.php'); 
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    echo  $_POST['user'];
    echo "HELLO";
    echo $_POST['pass'];
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from registration where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          echo $count;
        if($count == 1){ 
            $_SESSION['logged']=true;
            $_SESSION['username']=$username;
            echo $username;
            echo "<script>
            alert('lOGIN SUCCESS')
            localStorage.setItem('userName','$username');
            </script>";
            header("Location: home.html");
            exit();
        }  
        else{ 
            echo '<script>
            alert("Login failed")
            </script>';  
            exit();
        }
?>