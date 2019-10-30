<?php
	include("../config.php");
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Редактирование</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="wrapper">
	<?php
		$q=mysql_query("SELECT * FROM articles ORDER BY DATE DESC",$db);


		while($res = mysql_fetch_array($q)) 
		{
			echo '
				<div class="delete_news">
					<div class="title">'.$res['title'].'</div>
					<div class="edit-summary">'.$res['summary'].'</div>
					<div class="edit-ingridienti">'.$res['ingridienti'].'</div>
					
					<div class="date">Дата публикации: '.date('d-m-Y H:i:s', $res['date']).'</div>
					<a href="edit_news_action.php?id='.$res['id'].'">Редактировать новость</a>
				</div>
			';
		}
	?>
</div>
</body>
</html>