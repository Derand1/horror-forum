<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Хоррор форум</title>
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
    <a href="menu.php"><img src="https://i.imgur.com/jSjkLza.png" height="100" width="125"/></a>
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
	<a href="menu.php" class="buttonsub">Портал</a></button>
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
  
  <?php if (isset($_SESSION['user_id'])): ?>
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
	<a href ="logout.php" class="buttonsub">Выход</a></button>
  </button>
  
  <?php else: ?>
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
  <?php endif; ?>
	</div>
	<div class = "block3">
	<table class="table-list">
	<tbody>
	<div>
	<tr>
	<td colspan="4" align="center" class="custom-background">
	<div class="block4">
	<h3>Истории из реальной жизни</h3>
	</div>
	    <tbody>
      <tr>
        <th></th>
        <th> <font color = "white">Тема</th>
        <th> <font color = "white">Автор</th>
        <th> <font color = "white">Статистика</th>
      </tr>
    </tbody>
	</td>
	</tr>
	</tbody>
	<tbody>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png" width="35" height="35">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Обо всём</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="https://i.imgur.com/IZ0yLT5.png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Вампиры</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\result_ghost (1).png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Призраки</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\result_werewolf.png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Оборотни</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Сверхъественные события</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	</div>
	<div>
	<tr>
	<td colspan="4" align="center" class="custom-background">
	<div class="block4">
	<h3>Страшные истории и байки</h3>
	</div>
	    <tbody>
      <tr>
        <th></th>
        <th> <font color = "white">Тема</th>
        <th> <font color = "white">Автор</th>
        <th> <font color = "white">Статистика</th>
      </tr>
    </tbody>
	</td>
	</tr>
	</tbody>
	<tbody>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png" width="35" height="35">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Крипипасты</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">SCP</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Авторские рассказы</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	</div>
	<div>
	<tr>
	<td colspan="4" align="center" class="custom-background">
	<div class="block4">
	<h3>Знакомства и общение</h3>
	</div>
	    <tbody>
      <tr>
        <th></th>
        <th> <font color = "white">Тема</th>
        <th> <font color = "white">Автор</th>
        <th> <font color = "white">Статистика</th>
      </tr>
    </tbody>
	</td>
	</tr>
	</tbody>
	<tbody>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png" width="35" height="35">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Флудилка</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	<tr>
	<td class="img-cell">
	<a href="1lb.html">
	<img src="images\2024-10-18_15-24-29.png">
	</a>
	</td>
	<td>
	<a href="1lb.html" name="b1" class="subject">Знакомства</a>
	</td>
	<td>
	</td>
	<td>
	</td>
	</tr>
	</div>
	</tbody>
	</table>
	</div>
</body>
</html>