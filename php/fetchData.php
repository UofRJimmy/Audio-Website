<?php
include("connectdb.php");

$name=$_POST['search'];

$query="SELECT filename,image,id,name,lyric FROM music WHERE name='$name'";

$r=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($r))
    {
    session_start();
    if($row['image']==""){
        $_SESSION['image']='image/user_face.png';
    }else{
    $_SESSION['image']=$row['image'];
    }
    $_SESSION['filename']=$row['filename'];
    $_SESSION['id']=$row['id'];
    $_SESSION['song']=$row['name'];
    if($row['lyric']==""){
        $_SESSION['lyric'] ='/phpstudy_pro/WWW/ss/lyric/none.txt';
    }else{
    $_SESSION['lyric'] =$row['lyric'];
    }
    header("location: ../index.php");
    }
else{
    header("location: ../index.php");
}  

mysqli_close($conn);
?>



