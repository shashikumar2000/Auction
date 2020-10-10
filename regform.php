<html>
<head>
<script language="javascript">
function fun1()
{
 var x=document.getElementById("loc").value;
 
if(x=="del")
 document.getElementById("101").innerHTML="Auctions ACTIVE!!";
else if(x=="mum")
 document.getElementById("101").innerHTML="Auctions ACTIVE!!";
else if(x=="hyd")
 document.getElementById("101").innerHTML="Auctions ACTIVE!!";
else if(x=="bang")
 document.getElementById("101").innerHTML="NO AUCTION..Come Back Later";
else if(x=="kol")
 document.getElementById("101").innerHTML="NO AUCTION..Come Back Later";
else if(x=="oth")
 document.getElementById("101").innerHTML="NO AUCTION in your city yet..TRY AGAIN LATER";
else
document.getElementById("101").innerHTML="Select a Location";
}
function fun2()
{
 var a=document.f1.psw.value;
 var y=/\W/g;
 var z=/\d/g;
 var f=0;
 if(a.length>=6)
 { 
   if(z.test(a))
    { 
     if(y.test(a))
      {document.getElementById("102").innerHTML="Accepted";
      }
    }
 }
 else
  {f=1;
  }
if(f!=0)
{alert("Enter a min of 6 characters with atleast one digit and one special char for password");
         document.f1.psw.value="";}
}
function fun3()
{
 var p=document.f1.psw.value;
 var q=document.f1.cpsw.value;
if(p==q)
{
document.getElementById("103").innerHTML="Accepted";
}
else
{alert("Password should match");
document.f1.cpsw.value="";
}
}

function fun4()
{
 var a=document.f1.uname.value;
 if(a.length<6)
  {alert("Enter a min of 6 char for username");
         document.f1.uname.value="";
      }
else
  {document.getElementById("104").innerHTML="Accepted";
    }
}
function fun5()
{
 var a=document.f1.phno.value;
var y=/\D/g;
if((a.length==10)&&(y.test(a)==false))
   {document.getElementById("105").innerHTML="Accepted";
    } 
else
{alert("Enter a valid phone number");
         document.f1.phno.value="";
      }
}
function fun6()

{
 var a=document.f1.email.value;
var x=/@gmail.com$/;
if(x.test(a))
 {document.getElementById("106").innerHTML="Accepted";
    } 
else
{alert("Enter a valid email");
         document.f1.email.value="";
    } 
 }
function fun7()
{
 var a=document.f1.ano.value;
var y=/\D/g;
if((a.length==12)&&(y.test(a)==false))
   {document.getElementById("107").innerHTML="Accepted";
    } 
else
{alert("Enter a valid aadhar card number");
         document.f1.ano.value="";
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
  font-size:50px;
  font-weight:bold;
  color:rebeccapurple;
  background-color:transparent;
}
p.two
{ font-style:oblique;
  font-family:serif;
  font-size:18px;
  font-weight:bold;
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
<div><p class="one">&nbsp;&nbsp;<u>SIGN UP</u>&nbsp;&nbsp;</p><img src="a1.jpg" height=80 width=200</img>
</div>
</td>
</tr>
<tr>
<td>

<form name="f1" method="post" action="user1.php" onreset="confirm('Would you like to clear')">
<p class="two"><br>
  First name:<br>
  <input type="text" name="firstname" size=50><br><br>
   Last name:<br>
  <input type="text" name="lastname" size=50><br><br>
User name:<br>
  <input type="text" name="uname" size=50><br><br>
<div style="color:green;font-weight:bold;" id="104"></div></p><p class="two">
 Phone no:<br>
  <input type="text" name="phno" size=50 onclick="fun4()" ><br><br>
<div style="color:green;font-weight:bold;" id="105"></div></p><p class="two">
 Email:<br>
  <input type="text" name="email" size=50 onclick="fun5()"><br><br>
<div style="color:green;font-weight:bold;" id="106"></div></p><p class="two">
Location:<br>
  <select id="loc" name="location" onclick="fun1()" >
<option value="brc" onclick="fun6()">Select</option>
<option value="del" onclick="fun6()">DELHI</option>
<option value="mum" onclick="fun6()">MUMBAI</option>
<option value="hyd" onclick="fun6()">HYDERABAD</option>
<option value="bang" onclick="fun6()">BANGALORE</option>
<option value="kol" onclick="fun6()">KOLKATA</option>
<option value="oth" onclick="fun6()">OTHERS</option>
</select>
<h4 id="101" style="color:red"></h4>
</p>
<p class="two">
Aadhaar card no:<br>
  <input type="text" name="ano" size=50><br><br>
<div style="color:green;font-weight:bold;" id="107"></div></p><p class="two">
 Password:<br>
  <input type="password" name="psw" size=50 onclick="fun7()">  
<div style="color:green;font-weight:bold;" id="102"></div></p>
<p class="two">Confirm Password:<br>
  <input type="password" name="cpsw" size=50 onclick="fun2()">
<div style="color:green;font-weight:bold;" id="103"></div></p><p class="two">
    Select Gender:<br>
  <input type="radio" name="gender" value="male" onclick="fun3()"> Male<br>
  <input type="radio" name="gender" value="female" onclick="fun3()"> Female<br>
  <input type="radio" name="gender" value="other" onclick="fun3()"> Other<br><br>
Select Action:<br>
  <input type="radio" name="s" value="sell" > SELL<br>
  <input type="radio" name="s" value="bid"> BID<br> </p><br>
  <input type="reset" style="width:100px;height:40px;" name="r1" value="CLEAR">&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="submit" value="submit" placeholder="signup" name="submit1" style="width:100px;height:40px;background-color:#ff4436;" onclick="funs()"/>

</form>
</td>
</tr>
</table>
</center>
</body>
</html>
