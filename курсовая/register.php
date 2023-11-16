
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php
	var_dump($_SESSION);
	if(!empty($_SESSION['error']))
	{
	?>
	<p style="color:red;"><?=$_SESSION['error']?></p>

	<?php
	}
	unset($_SESSION['error']);
	?>
<form action="service/reg.php" method="POST">
	<input name="login">
	<input name="password" type="password">
	<input type="submit">
</form>		
</body>
</html>