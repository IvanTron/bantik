<script type="text/javascript">
	$(document).ready(function(){
		$('.answer').click(function(){
			var id = $(this).attr('id');
			alert(id);
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
<form method="POST" action="function/ajax_add.php" enctype="multipart/form-data">
<p><input type="text" name="title" placeholder="Название банта"></p>
<p><input type="text" name="desc" placeholder="Описание банта"></p>
<p><input type="text" name="price" placeholder="Цена банта"></p>
<p><input type="text" name="count" placeholder="Количество"></p>
<p>Маленькое изображение(ширина - 190px, высота - 300px)<br><input type="file" name="img[]"></p>
<p>Большое изображение(ширина - 750px, высота - 500px)<br><input type="file" name="img[]"></p>
<p><button id="btn">Отправить</button></p>
</form>