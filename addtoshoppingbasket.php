<?php
	session_start();
?>

<html>
<head>
<title> Solent E-Stores: Add shopping to basket and/or buy </title>
</head>	
<?php
//script to allow normal users to add pruduct to basket//
$conn=new PDO("mysql:host=localhost;dbname=assign082;","assign082","yohXihaZ");
//checks if user is loged in//
if(!isset($_SESSION["username"]))
{
echo "You must login";
echo "<a href="login.html"></>";
}
else
{
//checks productID and qty to the stocklevel//
$id=$_GET["productID"];
$q=$_GET["qty"];
$s= $conn->query("SELECT stocklevel FROM products WHERE $id='ID'");		
//Takes away from stock if qty is greater than or = to 0//		
if($s-$q=>0)
{
$id=$_GET["productID"];
$q=$_GET["qty"];			
$u=$_SESSION["username"];		
//inserts the get session in the basket database//					
$conn->query("INSERT INTO basket(productID, username, qty) VALUES ('$id', '$u', '$q')");					
echo"<p>"
echo"The product has now been added to your basket and is ready to buy";
echo"<a href='index.html'> home page </a>";
echo"</p>";
}
else
{
echo"This product is no longer avaliable, try agian later";
echo"<a href='index.html'> Back to home page </a>";
}
}
?>
</body>
</html>