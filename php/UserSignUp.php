<?php

    include ('connectdb.php');
    
    error_reporting(0);

    session_start();
    
    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['pswd'];
        $rpassword = $_POST['pswdr'];
    
        if ($password == $rpassword) {
            $sql = "SELECT * FROM local.userlogin WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO userlogin (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                $result1= mysqli_query($conn, $sql);
                if ($result1) {
                    echo "<script>alert('Registration Completed. Welcome $username')</script>";
                    $username = "";
                    $email = "";
                    $_POST['pswd'] = "";
                    $_POST['pswdr'] = "";
                    header("Location: UserLogin.php");
                } else {
                    echo "<script>alert('Something Wrong Went.')</script>";
                }
            } else {
                echo "<script>alert('Email Already Exists.')</script>";
            }
            
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Singup Page</title>
    <link rel="stylesheet" href="../css/styleLogin.css"/>
</head>
<body>
<div class="container">
    <div class="panel">
        <div class="content">
            <div class="switch">
                <h1 id="signUp">Signup</h1>
            </div>

            <form action="" method="POST">

                <div id="username" class="input"><input type="text" id="uname" name="uname"  placeholder="username"></div>
                <div id="email" class="input" ><input type="text" id="email" name="email" placeholder="email" ></div>
                <div id="password" class="input" ><input type="password" id="pswd" name="pswd" placeholder="password" ></div>
                <div id="repeat" class="input" ><input type="password" id="pswdr" name="pswdr" placeholder="repeatpassword" ></div>
                <p>
                    <a id="login" href="./UserLogin.php" class="input">Already register?Login here</a>
                </p>

                <button class="button" type="submit" name="submit">Register</button>

            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="SignupR.js"></script>
</html>