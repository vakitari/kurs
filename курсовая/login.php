<?php 
session_start();
if (!empty($_SESSION['error'])) {
   echo $_SESSION['error'];
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	

<form action="service/log.php" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form>

			
</body>
</html>