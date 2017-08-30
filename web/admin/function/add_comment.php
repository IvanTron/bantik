<?php
include '../../db.php';
$fio = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = mysql_query("select * from orders");

for ($i=0; $i < $rs = mysql_fetch_array($sql); $i++) { 
	if($rs['email'] == $email){
		$insert = mysql_query("insert into comment(name, email, message) values('$fio', '$email', '$message')");
		if($insert){
			echo "<meta http-equiv='refresh' content='0; ../../'>";
		}else{
			echo "error insert";
		}
	}else{
		echo "Такого email нет в базе";
		break;
	}
}

?>