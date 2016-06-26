<?php

 $id = $_GET['id'];
  $price = $row['price'];

  echo "
  <form class=\"gform\"  action=". $_SERVER['REQUEST_URI']." method=\"post\" >
  	<input type=\"hidden\" name=\"ind\" value=\"". $id ."\">
  	<input type=\"hidden\" name=\"price\" value=\"". $price ."\">
  	<input name=\"numb\" type=\"number\" min=\"1\" max=\"".$row['amount']."\" value=\"1\">
  	<input type=\"submit\" value=\"В корзину\">
  </form>
  ";

if (isset($_POST['ind'])) {
	addtocart($_POST['ind'], $_POST['price'],$_POST['numb']);
}

if (isset($_SESSION['admin'])) {
	echo "
  <form class=\"gform\"  action=". $_SERVER['REQUEST_URI']." method=\"post\" >
  	<input type=\"hidden\" name=\"del_g_ind\" value=\"". $id ."\">
  	<input type=\"submit\" value=\"Удалить товар\">
  </form>
  ";
}

if (isset($_POST['del_g_ind'])) {
	$flag = $_POST['del_g_ind'];
	echo $flag;
	$result2 = mysqli_query($dbc,"DELETE FROM goods where id='$flag' limit 1");
}

?>