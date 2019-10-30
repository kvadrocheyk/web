<?php
	include("config.php");
?>

<html>

<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Полная страница</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<ul id="navbar"><!--nachalo-Menu-->
		<i><li><a href="#">Главная</a></li>
		<li><a href="#">Блюда</a>
			<ul><i>
				<li><a href="#">Салаты</a></li>
				<li><a href="#">Закуски и бутерброды</a></li>
				<li><a href="#">Первые блюда</a></li>
				<li><a href="#">Вторые блюда</a></li>
				<li><a href="#">Рыба и морепродукты</a></li>
				<li><a href="#">Выпечка</a></li>
				<li><a href="#">Десерты</a></li>
			</ul>
		</li>
		<li><a href="#">Напитки</a>
			<ul>
				<li><a href="#">Алкогольные</a></li>
				<li><a href="#">Безалкогольные</a></li>
			</ul>
		</li>
		<li><a href="#">Контакты</a></li></i>
</ul> <!--konec-Menu-->

<div class="wrapper">

<div class="bok-menu">
		<div class="razdel"><a href="sections/1.php"><img src="img/123.jpg"></a></div>
		<div class="razdel"><a href="sections/2.php"><img src="img/2.jpg"></a></a></div>
		<div class="razdel"><a href="sections/3.php"><img src="img/3.jpg"></a></a></div>
		<div class="razdel"><a href="#"><img src="img/5.jpg"></a></a></div>
		<div class="razdel"><a href="#"><img src="img/6.jpg"></a></a></div>
</div><!--bok-menu-->



<div class="content">
	<?php
		$id = $_GET['id'];
		$q = mysql_query("SELECT title,full,date FROM articles WHERE id='$id'");
		$res=mysql_fetch_array($q);
		echo '
			<div class="title">'.$res['title'].'</div>
			<div class="full">'.$res['full'].'</div>
	
		';
	?>
</div><!--content-->




</div><!--wrapper-->

<div class="footer">
	<div class="admin"><a href="admin.php">admin</a></div>
</div><!--footer-->
</body>
</html>