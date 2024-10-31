<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $email, $password])) {
        header("Location: login.php");
        exit();
    } else {
        echo "Ошибка: не удалось зарегистрировать пользователя.";
    }
}
?>

<!DOCTYPE HTML>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Регистрация</title>
<link rel="stylesheet" href="styles.css">
 </head>
 <body vlink="red">
 <style type="text/css">
 body {
 background: url("https://img.freepik.com/free-vector/frightening-halloween-realistic-background_33099-1052.jpg?t=st=1728599636~exp=1728603236~hmac=1f179581cedc739f05082a431302c69c1065090b6471dafa3b29d0ef26fac42a&w=826"); background-size: cover;
 }
  </style>
     <div class="block2">
	<div id="myMenu">
  <div class="myWrapper">
    <nav>
    <a href="menu.html"><img src="https://i.imgur.com/jSjkLza.png" height="100" width="125"/></a>
    </nav>
  </div>
</div>
  <p align="center"><font color = "ff0000" size="24" style = " -webkit-text-stroke: 1px black;">ХОРРОР ФОРУМ</font></p>
   </div>
	<div class ="buttons">
	<button style = "
    padding: 5px;
    padding-top: 10px;
    padding-right: 50px;
    padding-bottom: 10px;
    padding-left: 50px;
	background-image: url('https://img.freepik.com/free-vector/halloween-line-cobweb-effect-vector-horror-frame_107791-21050.jpg?t=st=1729814358~exp=1729817958~hmac=e6e60947b030d36a1bd5fb4d0a4a4372ccd4056df43ec05707bd790288f6321b&w=1060') ;
	background-size: cover;
	background-position: center;
	border-radius: 15px;">
	<a href="menu.html" class="buttonsub">Портал</a></button>
  </button>
  <button style = "
    padding: 5px;
    padding-top: 10px;
    padding-right: 50px;
    padding-bottom: 10px;
    padding-left: 50px;
	background-image: url('https://img.freepik.com/free-vector/halloween-line-cobweb-effect-vector-horror-frame_107791-21050.jpg?t=st=1729814358~exp=1729817958~hmac=e6e60947b030d36a1bd5fb4d0a4a4372ccd4056df43ec05707bd790288f6321b&w=1060') ;
	background-size: cover;
	background-position: center;
	border-radius: 15px;">
	<a href ="#2" class="buttonsub">Поиск</a></button>
  </button>
  
    <button style = "
    padding: 5px;
    padding-top: 10px;
    padding-right: 50px;
    padding-bottom: 10px;
    padding-left: 50px;
	background-image: url('https://img.freepik.com/free-vector/halloween-line-cobweb-effect-vector-horror-frame_107791-21050.jpg?t=st=1729814358~exp=1729817958~hmac=e6e60947b030d36a1bd5fb4d0a4a4372ccd4056df43ec05707bd790288f6321b&w=1060') ;
	background-size: cover;
	background-position: center;
	border-radius: 15px;">
	<a href ="#3" class="buttonsub">Календарь</a></button>
  </button>
  
    <button style = "
    padding: 5px;
    padding-top: 10px;
    padding-right: 50px;
    padding-bottom: 10px;
    padding-left: 50px;
	background-image: url('https://img.freepik.com/free-vector/halloween-line-cobweb-effect-vector-horror-frame_107791-21050.jpg?t=st=1729814358~exp=1729817958~hmac=e6e60947b030d36a1bd5fb4d0a4a4372ccd4056df43ec05707bd790288f6321b&w=1060') ;
	background-size: cover;
	background-position: center;
	border-radius: 15px;">
	<a href ="login.php" class="buttonsub">Вход</a></button>
  </button>
  
    <button style = "
    padding: 5px;
    padding-top: 10px;
    padding-right: 50px;
    padding-bottom: 10px;
    padding-left: 50px;
	background-image: url('https://img.freepik.com/free-vector/halloween-line-cobweb-effect-vector-horror-frame_107791-21050.jpg?t=st=1729814358~exp=1729817958~hmac=e6e60947b030d36a1bd5fb4d0a4a4372ccd4056df43ec05707bd790288f6321b&w=1060') ;
	background-size: cover;
	background-position: center;
	border-radius: 15px;">
	<a href ="register.php" class="buttonsub">Регистрация</a></button>
  </button>
	</div>
	<div class = "block5">
<div class="block4">
	<h3>Регистрация</h3>
	</div>
	<div class = "regform">
	<form action="register.php" method="post">
	<ul class="regul">
      <li class="regli">
    <label class ="regla">Имя пользователя:</label>
    <input type="text" name="username" required >
	</li>
	</ul>
	<ul class="regul">
	<li class="regli">
    <label class ="regla">Email:</label>
    <input type="email" name="email" required >
	</li>
	</ul>
	<ul class="regul">
	<li class="regli">
    <label class ="regla" >Пароль:</label>
    <input type="password" name="password" required>
	</li>
	</ul>
	<ul class="regul">
	<li class="regli">
    <button type="submit" style="margin-left: 115px;" >Зарегистрироваться</button>
	</li>
	</ul>
</form>
</div>
</div>
</body>
</html>
