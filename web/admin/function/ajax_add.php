<?php
include '../../db.php';
$title = $_POST['title'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$count = $_POST['count'];
// Обработка запроса
$path_img = "../../img/bant/small/";
$tmp_name = $_FILES['img[]']['tmp_name'];
$name = md5(microtime() . rand(0, 9999)).'.jpg';
foreach ($_FILES['img']['name'] as $k => $v){
	$path_img = "../../img/bant/small/";
	
    	move_uploaded_file($_FILES['img']['tmp_name']['0'],$path_img.$name);	

}
$path_big_img = "../../img/bant/big/";
move_uploaded_file($_FILES['img']['tmp_name']['1'],$path_big_img.$name);
$insert = mysql_query ("INSERT INTO product (title, description, price, count_product, small_img, big_img) VALUES ('$title', '$desc','$price','$count', '$name','$name')");
if (!$insert) {
	echo "error insert";
}else{
	echo "good";
}
?>