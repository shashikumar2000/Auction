<?php


 extract($_POST);
include("connection2.php");
$rs=mysqli_query($conn,"select username from regis where username='$uname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
    $query = "INSERT INTO regis (firstname,surname,username,phone,email,password,location,Aadhar,gender) values ('$firstname','$lastname','$uname','$phno','$email','$psw','$location','$ano','$gender')";

header("location: home1.php");
//echo($query);
//die();
    $result = mysqli_query($conn,$query);


?>



