<?php
session_start();
include("connection2.php");
extract($_POST);
if(isset($sbmt))
{
    if(!empty($unm) && !empty($pswd))
    {
    
      $sql = "SELECT * FROM regis WHERE username = '$unm' and password = '$pswd'";
    $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result); 
    if($numrows!=0)
    {
        
          while($row=mysqli_fetch_assoc($result))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
        if($unm == $dbusername && $pswd == $dbpassword){
            $_SESSION["login"]=$unm;
            header("location: afterlogin.php");
        }
    }
        else{
            $_SESSION["error"] = "Oops!Username or Password incorrect";
    header("location: into.php");
        }
        
        
    }
    else {  
    echo "All fields are required!";  
}  
}
       
   
?>

    