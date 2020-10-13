<?php
session_start();
?>
<html>
    <head>
        <script language="javascript">
function fun1()
{
 var a=document.f1.year.value;
var y=/\D/g;
if((a.length==4)&&(y.test(a)==false))
   {document.getElementById("101").innerHTML="Accepted";
    } 
else
{alert("Enter a valid year");
         document.f1.year.value="";
      }
}
</script>
        <style>
body{background-image:url("auction.jpg");background-size:cover;}
a:link,a:visited
{
color:white; background-color:transparent;text-decoration:none;
}
p.one
{ font-style:normal;
  font-family:verdana;
  font-size:20px;
  font-weight:bold;
  color:rebeccapurple;
  background-color:transparent;
}
p.two
{ font-style:normal;
  font-family:serif;
  font-size:15px;
}
table
{
top:25px;
position:relative;
height:450px;
width:600px;
background-color:#ffe4b5;
}
div
{display:flex;
 align-items:center;
}
</style>
    </head>
    <body>
        <center>
            <table border=9 cellpadding=10>
                <tr>
                    <td bgcolor=white >
                        <div><p class="one">&nbsp;&nbsp;<u>LETS GET YOU UP ON THE MENU</u>&nbsp;&nbsp;</p><img src="images/a1.jpg" height=80 width=200>
</div>
                    </td>
                </tr>
                <tr>
                    <td>

                        <form name="f1" method="post" action="sellerdb.php" onreset="confirm('Would you like to clear')" id="sform">
                            <p class="two"><br>
                                <?php
                                if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<i style='color:red ;text-align:center;'>$error</i>";
                    }
    ?><br>
  Product Title:<br>
                                        <input type="text" name="itemName" size=50><br><br>
   Color:<br>
                                                <input type="text" name="col" size=50><br><br>
Dimensions or Size:<br>
                                                        <input type="text" name="dim" size=50><br><br>
 Product purchase Year:<br>
                                                                <input type="text" name="year" size=50><br><br>
                                                                    <div style="color:green;font-weight:bold;" id="101"></div></p>
                            <p class="two">
 Image upload:<br>
                                    <input type="file" name="img" size=50 onclick="fun1()"><br><br>


                                        <textarea name="Description" form="sform">Enter description here...</textarea>
                                        <br>
Item group:<br>
                                                <select name="itemgroup">
                                                    <option value="grp1">Group 1</option>
                                                    <option value="grp2">Group 2</option>
                                                    <option value="grp3">Group 3</option>
                                                    <option value="grp4">Group 4</option>
                                                </select>

                                                <br><br>
Complete the standard check questionnaire 
</p>
                            <p class="two">
1:<br>
                                    <input type="radio" name="one" value="yes"> YES<br>
                                            <input type="radio" name="one" value="no"> NO<br>
                                                    <input type="radio" name="one" value="some"> SOME<br><br>
2:<br>
                                                                <input type="radio" name="two" value="yes"> YES<br>
                                                                        <input type="radio" name="two" value="no"> NO<br>
                                                                                <input type="radio" name="two" value="some"> SOME<br><br>
3:<br>
                                                                                            <input type="radio" name="three" value="yes"> YES<br>
                                                                                                    <input type="radio" name="three" value="no"> NO<br>
                                                                                                            <input type="radio" name="three" value="some"> SOME<br><br>
4:<br>
                                                                                                                        <input type="radio" name="four" value="yes"> YES<br>
                                                                                                                                <input type="radio" name="four" value="no"> NO<br>
                                                                                                                                        <input type="radio" name="four" value="some"> SOME<br><br>
5:<br>
                                                                                                                                                    <input type="radio" name="five" value="yes"> YES<br>
                                                                                                                                                            <input type="radio" name="five" value="no"> NO<br>
                                                                                                                                                                    <input type="radio" name="five" value="some"> SOME<br><br>
6:<br>
                                                                                                                                                                                <input type="radio" name="six" value="yes"> YES<br>
                                                                                                                                                                                        <input type="radio" name="six" value="no"> NO<br>
                                                                                                                                                                                                <input type="radio" name="six" value="some"> SOME<br><br>
7:<br>
                                                                                                                                                                                                            <input type="radio" name="seven" value="yes"> YES<br>
                                                                                                                                                                                                                    <input type="radio" name="seven" value="no"> NO<br>
                                                                                                                                                                                                                            <input type="radio" name="seven" value="some"> SOME<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="submit1" value="submit" style="width:100px;height:40px;background-color:#ff4436">
</form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
      <?php
    unset($_SESSION["error"]);
?>
