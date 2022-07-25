<?php
include("connectdb.php");
session_start();
$hintname="SELECT name FROM music";
$r=mysqli_query($conn,$hintname);
//store the name data to array
$a=array();
while($row=mysqli_fetch_array($r))
{

$a[]='"'.$row['name'].'"';

}
$_SESSION['songlist']=implode(",",$a);

echo $_SESSION['songlist'];
mysqli_close($conn);
?>