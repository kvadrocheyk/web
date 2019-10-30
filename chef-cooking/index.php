<?php
	include("config.php");
?>

<html>

<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Главная страница</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>
<div class="header">
	<h2><span>Сhef-Cooking.by</span></h2>
	<img src="img/1.png">
</div>












































<div class="navmenu"> <!--Начало ВСЕГО блока меню-->





<div class="navtab"><a class="linktab2" href="#">Главная</a></div>
<div class="navtab"><a class="linktab" href="#">Рецепты</a><!--Начало ТРЕТЬЕГО выпадающего блока-->

	<div class="drop_columns3"> <!--ОСНОВНОЙ Выпадающий блок, заголовок-->
		<span>Menu</span>
		<div class="obertka-menu">


			<div class="col_1">
				<div class="btnlink"><!--Ссылки-кнопи блок (если нужно чтобы ссылки смотрелись кнопками)-->
					<a href="#">
						<img src="img/pervoe.png">
						<span>Первое блюдо</span>
					</a>
				</div><!--Конец ссылки-кнопки-->
			</div><!--Конец ссылки-кнопки-->
			


			<div class="col_1"><!--Внутренний блок-->
				<div class="btnlink"><!--Ссылки-кнопи блок (если нужно чтобы ссылки смотрелись кнопками)-->
					<a href="#">
						<img src="img/vtoroe.png">
						<span>Второе блюдо</span>
					</a>
				</div><!--Конец ссылки-кнопки-->
			</div><!--Конец внутреннего блка-->

			<div class="col_1"><!--Внутренний блок-->
				<div class="btnlink"><!--Ссылки-кнопи блок (если нужно чтобы ссылки смотрелись кнопками)-->
					<a href="#">
						<img src="img/salati.png">
						<span>Салаты</span>
					</a>
				</div><!--Конец ссылки-кнопки-->
			</div><!--Конец внутреннего блка-->

			<div class="col_1"><!--Внутренний блок-->
				<div class="btnlink"><!--Ссылки-кнопи блок (если нужно чтобы ссылки смотрелись кнопками)-->
					<a href="#">
						<img src="img/napitki.png">
						<span>Напитки</span>
					</a>
				</div><!--Конец ссылки-кнопки-->
			</div><!--Конец внутреннего блка-->

			<div class="col_1"><!--Внутренний блок-->
				<div class="btnlink"><!--Ссылки-кнопи блок (если нужно чтобы ссылки смотрелись кнопками)-->
					<a href="#">
						<img src="img/deserti.png">
						<span>Десерты</span>
					</a>
				</div><!--Конец ссылки-кнопки-->
			</div><!--Конец внутреннего блка-->

			

		</div><!--obertka-menu-->
	</div><!--Конец общего внутреннего блка-->

</div><!--конец ОСНОВНОГО выпадающего блока-->

<div class="navtab"><a class="linktab2" href="#">Контакты</a></div>
</div><!--Конец ТРЕТЬЕГО вып. блока-->





</div><!--Конец ВСЕГО блока меню-->





























<div class="wrapper">

<div class="bok-menu">
	<span>Блюдо дня</span>
	<img src="http://www.jrati.ru/uploads/posts/2016-11/thumbs/1478374614_pirojki_iz_tvorojnogo_testa_s_yablokami-223431.jpg">

</div><!--bok-menu-->



<div class="content">
	<?php
	$on_page=8;
	$num_pages=ceil((mysql_num_rows(mysql_query("SELECT id FROM articles")))/$on_page);
	$current_page=isset($_GET['page'])? intval($_GET['page']):1;
	if ($current_page<1) 
		$current_page=1;
	if (current_page>$num_pages)
	$current_page=$num_pages;
	$start_from=($current_page - 1) * $on_page;
	$query=mysql_query("SELECT * FROM articles ORDER BY DATE DESC LIMIT $start_from, $on_page",$db);
	while($res=mysql_fetch_array($query)) 
	{
		echo '
		
			<div class="wrapper-post">
				<div class="article">
							


							<a href="full.php?id='.$res['id'].'"><div class="summary">'.$res['summary'].'</div></a>
							<a href="full.php?id='.$res['id'].'"><div class="ingridienti">'.$res['ingridienti'].'</div></a>
							<a href="full.php?id='.$res['id'].'"><center><div class="title">'.$res['title'].'</div></center></a>
							<a href="full.php?id='.$res['id'].'"><div class="date">Дата публикации: '.date('d-m-Y H:i:s', $res['date']).'</div></a>
			</div>
				</div>
		
			';
	}



	?>
</div><!--content-->




</div><!--wrapper-->
<div class="stranici">
	<?php
	//////////////////////////////// Постраничная навигация/////////////////////////////////////
	echo '<div class="nav_page">';
	for($page=1; $page<=$num_pages; $page++)
	{
		if($page==$current_page)
		{
			echo '<strong>'.$page.'</strong> &nbsp;';
		}
		else
		{
			echo '<a href="index.php?page='.$page.'">'.$page.'</a> &nbsp;';
		}
	}
	echo '</div>';
	////////////////////////////////Конец постраничной навигации/////////////////////////////////////
	?>
</div>
<div class="footer">
	<div class="admin"><a href="admin.php">admin</a></div>
</div><!--footer-->
</body>
</html>