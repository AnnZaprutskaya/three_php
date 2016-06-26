<?php
require_once 'navbar.php';

include "config2.inc.php";
 //session_start();

 ?>

 <section class="category_list col-md-3">
  <?php
  require_once 'left.php';
  ?>
</section>

<?php

if(isset($_GET['id'])){
  $query="SELECT * FROM goods WHERE id='" . $_GET['id'] . "'";
  $data = mysqli_query($dbc, $query) or die('error z');
  $row = mysqli_fetch_array($data);
  include "good_view.php";

  //setcookie("id",$row['id']);
 
}
else
{
	echo "cookie не установлен";

	// тут переходить на страницу с ошибкой ,что нет такого товара!
	//include "no_good.php";
}



function addtocart($product_id, $product_price, $product_number) {
$_SESSION['prod_count'] ++;
$incart=$_SESSION['prod_count'] - 1;
$_SESSION['product_id'][$incart] = $product_id;
$_SESSION['product_price'][$incart] = $product_price;
$_SESSION['product_count'][$incart] = $product_number;
update_cart_sum(); 
}

function update_cart_sum() { 
$_SESSION['cart_sum']=0; 
for ($i=0; $i<$_SESSION['prod_count']; $i++) { 
$_SESSION['cart_sum']=$_SESSION['cart_sum'] + $_SESSION['product_price'][$i]* $_SESSION['product_count'][$i]; 
} 
}

require_once 'footer.php';
?>