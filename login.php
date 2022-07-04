<?php




session_start();
	include("connection.php");
	include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            //read from database
            $query = "select * from pierpoint_users where username = '$username' limit 1";
            $result = mysqli_query($con,$query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password']===$password){
                        
                        $_SESSION['user_id'] = $user_data['user_id'];
                        
                        header("Location:index.php");
                        die;
                    }
                }
            }
            echo "Wrong Email or Password";
        } else
            {
                echo "Please fill the form.";
            }
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="style.css">
    <title>Pierpoint | Sign In</title>
</head>

<body>

<div class="login-bg">
        <form class="box" method="post">
            <h1 class="link">Pierpoint.</h1>
            <h3 class="link">Welcome Back.</h3>
            <input type="text" name="username" placeholder="Enter Your Username" pattern="[a-z,A-Z,_, ]*">
            <input type="password" name="password" id="psw" placeholder="Enter Your Password..." pattern="[a-z,A-Z,0-9,@,#,$,%,^,&,(,)]*">
            <input type="submit" value="Sign In">
            <a href="register.php">Sign Up <span class="material-symbols-outlined">arrow_forward</span></a>
        </form>
    </div>

    
</body>
</html>