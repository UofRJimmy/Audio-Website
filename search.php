<?php
include("./php/connectdb.php");

$hintname="SELECT name FROM music";
$r=mysqli_query($conn,$hintname);
$a=array();
//store the name data to array
while($row=mysqli_fetch_array($r))
{
    $a[]=''.$row['name'].'';  
}

mysqli_close($conn);

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= "</br> $name </br>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "The music does not exist in the library" : $hint;
?>