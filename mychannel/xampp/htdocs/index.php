<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>hedaer</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db = "dbname";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
</html>