<html>
<head>
<script language="javascript" type="text/javascript">
function fun1()
{
 var x=parseInt(document.f1.cc.value);
 var y=parseInt(document.f1.yc.value);
if(y>x)
{document.f1.cc.value=y;}
else{alert("Your cost must be more than current cost.");}
}
</script>
<style> 
            table, th, td { 
                 border: 3px solid #583f03; 
                border-collapse: collapse; 
                 
            } 
p{font-size:20; color:#583f03; text-align:middle;}
div{background-color:white; top:25px;}
</style> <!-- -->
</head>
<body bgcolor="#fceecd" align="center" >
<br>
<table cellpadding=25 align="center" bgcolor="white" >
<tr>
<td width=300>
<img src="draw.jpg" height=300 width=400>
</td>
<td width=600 >
<p style="text-align:center; font-size:28;"><u><b>XP PEN STARG640 ULTRA</b></u></p>
<div>
<p>SIZE : 6"x4"<br>
8192 Levels of pressure sensitivity<br>
Battery Free Stylus<br>
Black color
Used for :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7 months
<form name="f1">
    
      <p> Current Cost Rs:&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="cc" value="8000"  size=10></p>
    <p>Your Cost Rs:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="yc" size=5></p>
       <img src="weight_bal.jpg" height=50 onclick="fun1()" border=2>
       

</form>
</p>
</div>
</td>
</tr>
</table>
</body>
</html>
