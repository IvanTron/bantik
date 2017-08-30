<!DOCTYPE html>
<html>
<head>
	<title>Вход в панель управления</title>
	<link rel="stylesheet" type="text/css" href="css/auth.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			var login = $('#login').val();
			var pass = $('#pass').val();
			$.ajax({
				url: 'function/ajax_auth.php',
				type: 'POST',
				dataType: 'json',
				data:({
					login: login,
					pass: pass
				}),
				beforeSend: function(){
					
				},
				success: function(data){
					
					if(data.success == 'error'){
						alert('Неправильный логин или пароль');
					}else{
						alert(data.success);
						$('html').load('view.php');
					}
				}
			});
		});
	});
</script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <div class="login-form">
      <input type="text" placeholder="username" id="login"/>
      <input type="password" placeholder="password" id="pass"/>
      <button id="btn">login</button>
    </div>
  </div>
</div>
</body>
</html>