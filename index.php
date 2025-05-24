<?php
session_start();
include("connection.php"); // Corrected typo in the filename
include("function.php");
$user_data = check_login($con);
?>
<!Doctype html>
<html>
<head>
<title> my website
</title>
</head>
<body>
<a href="logout.php">logout</a>
<h1>This is the index page</h1>
</body>
</html>