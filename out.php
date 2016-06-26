<?php
session_start();
error_reporting(0);
unset($_SESSION['login']);
unset($_SESSION['id']);
$arr = explode("/", $_SESSION['prev_page']);
$result = count($arr);
//foreach ($arr as $value) {
//	echo $value + "<br>";
//}
//echo $arr[$result-1];
require_once $arr[$result-1];
//set_include_path($_SESSION['prev_page']);
?>