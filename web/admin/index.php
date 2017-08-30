<?php if(!session_start()){
	session_start();
}
?>
<?php
if(!empty($_SESSION['login'])){
	include 'view.php';
}else{
	include 'auth.php';
}
?>
