<?php
$sql = mysql_query('select * from comment');
// Текущая страница
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else $page = 1;
	
	$kol = 10;  //количество записей для вывода
	$art = ($page * $kol) - $kol;
	
	
	// Определяем все количество записей в таблице
	$res = mysql_query("SELECT COUNT(*) FROM comment");
	$row = mysql_fetch_row($res);
	$total = $row[0]; // всего записей	
	
	
	// Количество страниц для пагинации
	$str_pag = ceil($total / $kol);

	// Запрос и вывод записей
	$sql = mysql_query("select * from comment LIMIT $art,$kol");
	echo $total." комментариев.";
	for ($i=0; $i < $rs = mysql_fetch_array($sql); $i++) { 
		echo "<div class='panel_com'>";
		echo "Имя: ".$rs['name']."<br>";
		echo "Email: ".$rs['email']."<br>";
		echo "Комментарий:<br>".$rs['message'];
		echo "</div>";
	}
// формируем пагинацию
		$vi = $_GET['view'];
	for ($i = 1; $i <= $str_pag; $i++){
		echo "<a href=index.php?view=".$vi."&&page=".$i."> Страница ".$i." </a>";
	}

?>