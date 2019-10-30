<?php
	session_start();
	if (!$_SESSION['login'] AND !$_SESSION['pass'])
	{
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Полная страница</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="form">
		<form action="admin/auth_action.php" method="post">
			<input name="login" type="textbox" placeholder="Введите логин">
			<input name="pass" type="password" placeholder="Введите пароль">
			<input name="submit" type="submit" value="Ввод">
		</form>
	</div>
</body>
</html>
<?php
}
else
{S
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Полная страница</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="nav">
		<a href="admin/add_news.php">Добавить новость</a>
		<a href="admin/delete_news.php">Удалить новость</a>
		<a href="admin/edit_news.php">Редактировать новость</a>
	</div>
</body>
</html>
<?php
}
?>