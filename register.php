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
            //save to database
            $user_id = random_num(20);
            $query = "insert into pierpoint_users (username, password, user_id) values ('$username','$password','$user_id')";
            mysqli_query($con,$query);

            header("Location:login.php");
            die;
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
    <link rel="stylesheet" href="style.css">
    <title>Pierpoint | Sign In</title>
</head>
<body>
    
<div class="login-bg">
        <form class="box" method="post">
            <h1 class="link">Pierpoint.</h1>
            <h3 class="link">Join Us</h3>
            <input type="text" name="username" placeholder="Enter Your Username" pattern="[a-z,A-Z,_, ]*">
            <input type="password" id="psw" name="password" placeholder="Enter Your Password..." pattern="[a-z,A-Z,0-9,@,#,$,%,^,&,(,)]*">
            <input type="submit" value="Register">
            <a href="login.php">Sign In</a>
        </form>
    </div>

</body>
</html>