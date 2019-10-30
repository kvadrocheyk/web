<?php
	session_start();
?>

<html>

<head>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Добавление новости</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>

<body>
<div class="wrapper" style="height: 850px;">
	<form action="add_news_action.php" method="post">
		<input type="textbox" name="title" required placeholder="Название"></input>
		<br>
		<select name="type">
			<option value="1">1</option>
			<option value="2">2</option>
		</select>

		<textarea required placeholder="Изображение" name="summary"></textarea>
		<textarea required placeholder="Ингридиенты" name="ingridienti"></textarea>	
		<textarea id="ck-editor-text2" required placeholder="Статья" class="article_add" name="full"></textarea>
		<script type="text/javascript">
				// CKEDITOR.replace("ck-editor-text");
				CKEDITOR.replace("ck-editor-text2");
			</script>
		<input type="submit" name="submit" value="Добавить статью"></input>

	</form>
</div>
</body>
</html>