<?php 
include("connectdb.php");
session_start();
$id=$_SESSION['id'];
if($id<8){
$next=$id+1;
}else if($id==8){
    $next=1;
}

$query="SELECT filename,image,name,lyric FROM music WHERE id='$next'";

$r=mysqli_query($conn,$query);

if($row=mysqli_fetch_array($r))
    {
        if($row['image']==""){
            $_SESSION['image']='image/user_face.png';
        }else{
        $_SESSION['image']=$row['image'];
        }
    $_SESSION['filename']=$row['filename'];
    $_SESSION['id']=$next;
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