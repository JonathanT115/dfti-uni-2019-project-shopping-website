<?php
	session_start();
?>

<html>
<head>
<title> Solent E-Stores: add another product </title>
</head>	
<body>
<?php
//this scrpit will allow to add an addinal product to the basket//
$id=$_GET["productID"];			
$conn=new PDO("mysql:host=localhost;dbname=assign082;","assign082","yohXihaZ");
//get content from basket//			
echo "<form method='post' action='addtoshoppingbasket.php'>";
echo "qty: <input name='qty' /> <br />";
//add new additinal product //	   
echo "<input type='hidden' name='productID' value='$id' <br />";
echo "<input type='submit' value='Add product!' />";
echo "</form>";
?>
</body>
</html>