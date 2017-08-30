<?php
namespace app\models;
 
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\bootstrap\Url;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use app\models\Product;
use app\models\Comment;
$session = YII::$app->session;
$name = $_POST['name'];
$email = $_POST['email'];
$mesage = $_POST['message'];
//Добавление в базу товаров
//foreach ($_SESSION['product'] as $key => $value) {
//	mysql_query("insert into order_product(id_product, count_product, email) values('$key','$value', '$//email')");//
//}//
//////Добавление в базу заказов //
//i//f(!empty($_POST['email'])){//
//	mysql_query("insert into orders(name, email, message) values('$name', '$email', '$mesage')");//
//}
echo $name;
echo "<meta http-equiv='refresh' content='1; ../../'>";

// создаем экземпляр класса
//$model = new Country;
//// добавляем название страны
//$model->name = 'Англия';
//// добавляем населенность
//$model->number = '53012456';
//// добавяем количество жителей
//$model->area = '133396';
//// сохраняем запись, за место метода save() можно использовать метод insert() ($model->insert())
//$model->save(); 
?>
 