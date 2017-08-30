<script type="text/javascript">
	$(document).ready(function(){
		$('.answer').click(function(){
			var id = $(this).attr('id');
			$.ajax({
				url: 'function/ajax_answer.php',
				type: 'POST',
				dataType: 'html',
				data:({id: id}),
				success: function(data){
					location.reload();
				}
			});
		});
	});
</script>
<?php
// Текущая страница
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else $page = 1;
	
	$kol = 10;  //количество записей для вывода
	$art = ($page * $kol) - $kol;
	
	
	// Определяем все количество записей в таблице
	$res = mysql_query("SELECT COUNT(*) FROM orders");
	$row = mysql_fetch_row($res);
	$total = $row[0]; // всего записей	
	
	
	// Количество страниц для пагинации
	$str_pag = ceil($total / $kol);

	// Запрос и вывод записей
	$sql = mysql_query("select * from orders order by vis LIMIT $art,$kol");

for ($i=0; $i < $rs = mysql_fetch_array($sql); $i++) { 
	echo "<div id='snip'>";
		
			echo "<img src='img/gal.png' class='answer' id='".$rs['id']."'>";
			echo "<div id='left'>";
			if($rs['vis'] == 0){
				echo "Имя клиента: ".$rs['name']."(В ожидании)<br>";
			}else{
				echo "Имя клиента: ".$rs['name']."(Отвечано)<br>";
			}
			echo "Email: ".$rs['email']."<br>";
			echo "Сообщение: <br>".$rs['message']."<br>";
		echo "</div>";
		echo "<div class='right'>";
			$sql_order = mysql_query("select * from order_product where email = '".$rs['email']."'");
			for($i = 0; $i < $rs_order = mysql_fetch_array($sql_order); $i++){
				
				$sql_product = mysql_query("select * from product where id = '".$rs_order['id_product']."'");
				for ($i=0; $i < $rs_product = mysql_fetch_array($sql_product); $i++) { 
					
					echo "<table><tr>";
					echo "<td>Назване".$rs_product['title']."</td>";
					echo "<td>количество ".$rs_order['count_product']."</td>";
					echo "<td>Общая цена ".$rs_product['price']*$rs_order['count_product']."</td>";
					echo "</tr></table>";
					
				}
				
			}
		echo "</div>";
	echo "</div>";
}
// формируем пагинацию
		$vi = $_GET['view'];
	for ($i = 1; $i <= $str_pag; $i++){
		echo "<a href=index.php?view=".$vi."&&page=".$i."> Страница ".$i." </a>";
	}
?>