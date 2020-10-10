<?php

session_start();
 extract($_POST);
include("connection2.php");
$rs=mysqli_query($conn,"select title from productdetails where title='$ptitle'");
if (mysqli_num_rows($rs)>0)
{
	  $_SESSION["error"]="Title already exist. Try another";
    header("location: sellform.php");
      exit;
}
    $query = "INSERT INTO productdetails (title,color,size,year,image,descri) values ('$ptitle','$col','$dim','$year','$img','$Description')";
header("location: home1.php");
    $result = mysqli_query($conn,$query);


?>


