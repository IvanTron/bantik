<?php if(!session_start()){
session_start();
}
?>
<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
if($login == 'mama_admin' && $pass == 'priorasurgut86'){
	$_SESSION['login'] = $login;
	echo json_encode(array('success' => 'Добро пожаловать'));
}else{
	echo json_encode(array('success' => 'error'));
}
?>