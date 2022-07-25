<?php
include ('config.php');

session_start();
$_SESSION['uname']="";
error_reporting(0);

if(isset($_POST['submit'])){
   $username=$_POST['uname'];
   $password=$_POST['pswd'];
//    $email=$_POST['email'];
   if($username=="" or $password==""){
    echo "<script>alert('username or password cannot be empty.')</script>";}
   else{
       $sql="select username,password from another.userlogin where username='$username'and password='$password'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($result);
       if($row){
        //    echo"Login in success! back to-> <a href='./index.php'>main page";
        $_SESSION['uname']=$username;
           header("location: ../index.php");
       }
       else{
           echo"Unable to login！<a href='UserLogin.php'>please try again";
       }
   }}
?>

<!DOCTYPE html>
<html lang="en">

<style>
    .homepage i{
    position: absolute;
    top: 1%;
    left: 2%;
    border: none;
    outline: none;
    margin: 0.5rem 1px 0;
    width: 4rem;
    height: 1rem;
    border-radius: 3%;
    color: rgba(138, 143, 255, 0.76);
    cursor: pointer;
    background: none;
    font-size: 30px;
}
</style>
<head>
    <meta charset="UTF-8">
    <title>Loginpage</title>
    <link rel="stylesheet" href="../css/styleLogin.css"/>
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container" onselectstart="return false">
        
        <div class="panel">
            <div class="content">
                <div class="switch">
                    <h1 id="login">Login</h1>
                    <div id="homepage" class="homepage"><a href="../index.php"><i class="fa fa-arrow-left" aria-hidden="true" ></i></a></div>
                </div>

                <form action="" method="post">
                    <td id="emailMsg"></td>
                    <div id="username" class="input"><input type="text" id="uname" placeholder="Username" name="uname" size="30"></div>
                    <td id="pswdMsg"></td>
                    <div id="password" class="input"><input type="text" id="pswd" placeholder="Password" name="pswd" size="30"></div>

                    <p>
                        <a id="signUp" href="./UserSignUp.php" class="input">Sign Up</a>
                        <span>|</span>  
                        <a id="forget" href="./UserRetrieve.php" class="input">Forget password?</a>
                    </p>
                    <button class="button" type="submit" value="" name=submit>Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>