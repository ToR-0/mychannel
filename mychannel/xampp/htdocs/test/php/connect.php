<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>hedaer</title>
</head>
<body>
<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
</body>
</html>