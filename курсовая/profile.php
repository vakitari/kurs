<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "users");
$userId = $_SESSION['user'];
$query = $conn->query("SELECT * FROM user WHERE id = $userId ");
$user = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>пароль пользователя <?php echo $user['password']; ?></p> 
    <p>Login пользователя <?php echo $user['login']; ?></p>

</body>
</html>