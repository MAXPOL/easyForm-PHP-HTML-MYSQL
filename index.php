<?php

if (isset($_POST['login']) && isset($_POST['password'])){

$ip = $_SERVER['REMOTE_ADDR'];

$login = $_POST['login'];
$password = $_POST['password'];

$db_host = "localhost";
$db_user = "root";
$db_password = "1";
$db_base = 'user';
$pdo = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
$stmt = $pdo->prepare('SELECT id FROM users WHERE login = :login AND password = :password');
$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $password);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result && isset($result['id'])) {
echo 'YES';
} else {
echo 'NO';
}

}

?>

<html>
<head>
 <title>Авторизация</title>
</head>
<body>
 <form method="POST" action="">
  <input name="login" type="login" placeholder="Login"/>
  <input name="password" type="password" placeholder="Password"/>
  <br><br>
  <input type="submit" value="Авторизоваться"/>
 </form>
</body>
</html>
