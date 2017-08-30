<?php if(!session_start()){
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Панель управления</title>
	<link rel="stylesheet" type="text/css" href="css/pages.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<?php
include '../db.php';
?>
<header>
	<a href="function/unset.php" style="float: right;">выход</a>
</header>
<menu>
	<ul>
		<a href="?view=add"><li>Добавить работы</li></a>
		<a href="?view=order"><li>Заявки</li></a>
		<a href="?view=comment"><li>Комментарии</li></a>
	</ul>
</menu>
<content>
	<?php
	$view = empty($_GET['view'])? 'order': $_GET['view'];
	include "pages/".$view.".php";
	?>
</content>
</body>
</html>