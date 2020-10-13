<?php

session_start();
 extract($_POST);
include("connection2.php");
$rs=mysqli_query($conn,"select itemName from items where itemName='$itemName'");
if (mysqli_num_rows($rs)>0)
{
	  $_SESSION["error"]="Title already exist. Try another";
    header("location: sellform.php");
      exit;
}
    $query = "INSERT INTO items (itemName,color,size,itemyear,itempic,itemDesc,itemgroup) values ('$itemName','$col','$dim','$year','$img','$Description','$itemgroup')";
    $result = mysqli_query($conn,$query);
    
    header("location: home1.php");

?>


