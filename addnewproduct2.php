<?php
	session_start();
?>

<html>
<head>
<title>Solent E-Stores</title>
</head>
<body>
<?php
//this will colleted the form data from addnewproduct//
$n = $_POST["name"];
$m = $_POST["manufacturer"];
$d = $_POST["description"];
$p = $_POST["price"];
$s = $_POST["stocklevel"];
$a = $_POST["agelimit"];
//conn to the database and inseret post content to collums//
$conn = new PDO ("mysql:host=localhost;dbname=assign082;", "assign082", "yohXihaZ");
$conn->query("INSERT INTO products (name, manufacturer, description, price, stocklevel, agelimit) VALUES ('$n','$m','$d','$p','$s','$a')");
?>
</body>
</html>