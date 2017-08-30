<?php
include '../../db.php';
$id = $_POST['id'];
mysql_query("update orders set vis = 1 where id = '$id'");
?>