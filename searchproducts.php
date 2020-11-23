<?php
	session_start();
?>

<html>
<head>
<title>Solent E-Store</title> 
</head>
<body>
<?php
//base php scrpit to find searched data from the databse//
$n = $_GET["name"];
$conn = new PDO ("mysql:host=localhost;dbname=assign082;", "assign082", "yohXihaZ");
$results = $conn->query("select * from products where name='$n'");
//loops to find searched results//
while($row=$results->fetch())
{
//echo to display searched results//
echo " Name ". $row["name"] ."<br/> ";
echo " Product Description " .$row["description"]. "<br/>" ;
echo " Price " .$row["price"]. "<br/>" ;
echo " Stock level " .$row["stocklevel"]. "<br/>" ; 
echo " Age limit " .$row["agelimit"]. "<br/>" ;
//link to add content to basket//    
echo "<a href='addtoshoppingbasket.php?productID=" .$row["ID"]. "'>Add to basket</a>";
}
?>