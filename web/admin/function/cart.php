<?php 
session_start();

$id = $_POST['id'];
$count = $_POST['count'];

$_SESSION['product'][$id] = $count;
echo "good cart";
?>