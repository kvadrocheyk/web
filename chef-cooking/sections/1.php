<?php
	include("../config.php");
?>

<html>

<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
			<div class="razdel"><a href="../sections/1.php"><img src="../img/123.jpg"></a></div>
			<div class="razdel"><a href="../sections/2.php"><img src="../img/2.jpg"></a></a></div>
			<div class="razdel"><a href="../sections/3.php"><img src="../img/3.jpg"></a></a></div>
			<div class="razdel"><a href="#"><img src="../img/5.jpg"></a></a></div>
			<div class="razdel"><a href="#"><img src="../img/6.jpg"></a></a></div>
	</div><!--bok-menu-->



	<div class="content">

		<?php 
		$on_page=8;
		$num_pages=ceil((mysql_num_rows(mysql_query("SELECT id FROM articles WHERE type=1")))/$on_page);
		$current_page=isset($_GET['page'])? intval($_GET['page']):1;
		if ($current_page<1) 
			$current_page=1;
		if (current_page>$num_pages)
		$current_page=$num_pages;
		$start_from=($current_page - 1) * $on_page;
		$query=mysql_query("SELECT * FROM articles WHERE type=1 ORDER BY DATE DESC LIMIT $start_from, $on_page",$db);
		while($res=mysql_fetch_array($query)) 
		{
			echo '
			<div class="wrapper-post">
						<div class="article">
							
							<a href="../full.php?id='.$res['id'].'"><div class="summary">'.$res['summary'].'</div></a>
							<a href="../full.php?id='.$res['id'].'"><div class="ingridienti">'.$res['ingridienti'].'</div></a>
							
							<a href="../full.php?id='.$res['id'].'"><center><div class="title">'.$res['title'].'</div></center></a>
							<a href="../full.php?id='.$res['id'].'"><div class="date">Дата публикации: '.date('d-m-Y H:i:s', $res['date']).'</div></a>

				  		</div>
				</div>';
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
				echo '<a href="1.php?page='.$page.'">'.$page.'</a> &nbsp;';
			}
		}
		echo '</div>';
		////////////////////////////////Конец постраничной навигации/////////////////////////////////////
		?></div>
	
</div>


<div class="footer">
	<div class="admin"><a href="../admin.php">admin</a></div>
</div><!--footer-->
</body>
</html>