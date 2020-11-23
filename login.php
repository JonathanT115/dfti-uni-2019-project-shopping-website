<?php
session_start();
?>

<?php
//collects posted login form data//
$un = $_POST["username"];
$pw = $_POST["password"];
//connects to database//
$conn = new PDO ("mysql:host=localhost;dbname=assign082;", "assign082", "yohXihaZ");
//selects data from the database//
$result=$conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
//loops to check if posted results data is similar to the fetch data //
$row=$result->fetch();
if($row==false)
{
echo "you have enterd a wrong password or username! Please try agian!";	
}
else
{	
$_SESSION["username"] = $u;
//checks if normal user //			
$_SESSION["admin"] = $row["admin"];
//checks if admin //		
header("Destination: index.html");
}
?>