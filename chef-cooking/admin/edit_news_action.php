<?php
	session_start();
	include("../config.php");
	$id=intval($_GET['id']);
	$q=mysql_query("SELECT * FROM articles WHERE id='$id'");
	$res=mysql_fetch_array($q);
	



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
	<form action="edit_news_action_update.php" method="post">
		<input type="hidden" value="<?php echo $id; ?>" name="id">
		<input type="textbox" name="title" required placeholder="Заголовок статьи" value="<?php echo $res['title']; ?>"></input>
		<br>
		<select name="type">
			<option value="1" <?php if($res['type']==1) echo "selected";?>>1</option>
			<option value="2" <?php if($res['type']==2) echo "selected";?>>2</option>
		</select>
		<textarea required placeholder="Короткое описание" name="summary" ><?php echo $res['summary']; ?></textarea>
		<textarea required placeholder="Ингридиенты" name="ingridienti" ><?php echo $res['ingridienti']; ?></textarea>
		<textarea id="ck-editor-text3" required placeholder="Статья" class="article_add" name="full" ><?php echo $res['full'];?></textarea>
		<script type="text/javascript">
				// CKEDITOR.replace("ck-editor-text");
				CKEDITOR.replace("ck-editor-text3");
				
			</script>
		<input type="submit" name="submit" value="Изменить статью"></input>
	</form>
</div>
</body>
</html>