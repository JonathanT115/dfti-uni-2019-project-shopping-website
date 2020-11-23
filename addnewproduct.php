<?php
	session_start();
?>
  
<html>
<head>
<title>Add New Product</title>
</head>
<body>	       
<?php 
//This will check if login ueser is admin//
if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1)
{
//Form that allows the admin to add new product//
<form method="post" action="addnewproduct2.php">
Product Name: <br />
<input name="name" /> <br />
Manufacturer: <br />
<input name="manufacturer" /> <br />
Product Description: <br />
<input name="Description"/> <br />
Stock: <br />
<input name="stocklevel" /> <br />
Age: <br />
<input name="agelimit" /> <br />
Price: <br />
<input name="price" /> <br />
<input type="button" value="Submit" />
</form>
//this will the be sent to addnewproduct2//		
}
//if the user is not admin echo will block them from using the form//
else
{
echo"you can not go on this page as you are not the admin!";
echo"<a href='index.html'> go to index page </a>";
}
?> 
</body>
</html>