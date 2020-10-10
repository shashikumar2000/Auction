<?php
session_start();
?>
<html>
<head>
<style>
div
{display:flex;
 align-items:center;
}
p.one
{ text-align:center;
  font-style:normal;
  font-family:verdana;
  font-size:20px;
  font-weight:bold;
  color:rebeccapurple;
  background-color:transparent;
text-decoration:underline;
}
p.two
{ text-align:center;
  font-style:normal;
  font-family:verdana;
  font-size:12px;
  font-weight:bold;
  color:white;
  background-color:transparent;
text-decoration:none;
}
table.one{
  border-collapse: collapse;
 
}
a:link,a:visited
{
color:white; background-color:transparent;text-decoration:none;
}
table.two{
align:right;
border: 2 solid black;}
button {
  background-color:teal;
  border: 2 solid black;
  padding: 2px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
<body>
<table class="one" border=0 cellpadding=50>
<tr>
<td>
    <table  bgcolor="#c3f3f6" height=200 width=700 cellpadding=50>
     <tr>
          <td><b>ABOUT US</b><br>An auction is a process of buying and selling goods or services by offering them up for bid, taking bids, and then selling the item to
                 the highest bidder. The open ascending price auction is arguably the most common form of auction in use today.[1] Participants bid openly against one another, with each subsequent bid required to be higher than the previous bid.[2] An auctioneer may announce prices, bidders may call out their bids themselves (or have a proxy call out a bid on their behalf), or bids may be submitted electronically with the highest current bid publicly displayed.[2] In a Dutch auction, the auctioneer begins with a high asking price for some quantity of like items; the price is lowered until a participant is willing to accept the auctioneer's price for some quantity of the goods in the lot or until the seller's reserve price is met.[2] While auctions are most associated in the public imagination with the sale of antiques, paintings, rare collectibles and expensive wines, auctions are also used for commodities, livestock, radio spectrum and used cars. In economic theory, an auction may refer to any mechanism or
                  set of trading rules for exchange.<br>
         </td>
      </tr>
     </table>
</td>
<td>
 <form name="f1" method="post" action="logindb.php" onreset="confirm('Would you like to clear')">
         <table class="two" bgcolor="white" height=200 width=350 cellpadding=12>

<tr align="middle"><td>
<p class="one" style="color:teal;">LOGIN/SIGNUP</p></td></tr>

          <tr align="middle"><td>&nbsp;&nbsp;Username:&nbsp;&nbsp;<input type="text" name="unm"></td></tr>
          <tr align="middle"><td>&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;<input type="password" name="pswd"></td></tr>
           <tr align="middle"><td>  <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<i style='color:red ;text-align:center;'>$error</i>";
                    }
                ?></td></tr>
         <tr align="middle"><td><button type="submit" name="sbmt"><p class="two">Login</p></button></td></tr>
         <tr align="middle"><td> Click on "Sign Up" button below to create a new account</td></tr>
        
          </table>
            
    </form>
     <table class="two" bgcolor="white" height=30 width=350 cellpadding=12>
       <tr align="middle"><td><button type="submit"><a target="_parent" href="regform.php"><p class="two">Sign Up</p></a></button></td></tr><br>
</table>
</td>
</tr>
</table>
<br>
<p class="one" style="font-size:30;">CITIES WITH<br>ACTIVE AUCTIONS</p>
<div><img src="map.png" height=600 width=700>
<p class="two" style="color:teal;font-size:20">RESIDENTS OF THE GIVEN CITIES???<br>GET READY TO MAKE SOME SERIOUS CHANGES TO YOUR LIFE <br> BY GIVING UP A FEW<br>AND<br>GETTING TONS OF NEW PRODUCTS<br>AT THE CHEAPEST PRICES.<br><br>SIGN UP NOW<br><br><a href="regform.php" target="_parent"><img src="sell.png" height=80></img></a><img src="or.png" height=80></img><a href="regform.php" target="_parent"><img src="bid.png" height=80></img></a></p></div>

</img>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>