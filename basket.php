
<?php
include('config2.inc.php');
//session_start();
?>

<header>
<?php
	require_once 'navbar.php';
?>
</header>

<section class="category_list col-md-3">
	<?php
	require_once 'left.php';
	?>
</section>
<section class="content col-md-9">
<table class="basket col-md-10 col-xs-11" cellpadding="10px" rules="rows">
<tr>
	<th>Наименование:</th>
	<th>Количество:</th>
	<th>Цена за 1 шт.</th>
	<th>Общая цена:</th>
</tr>

<?php
for ($i=0; $i<$_SESSION['prod_count']; $i++) {
/* получаем информацию о товаре из базы данных */
$q="SELECT * FROM goods WHERE id='".$_SESSION['product_id'][$i]."'";
$query=mysqli_query($dbc,$q);
$prod_in_cart=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<tr>
<td><?php echo $prod_in_cart['name']?></td>
<td>


<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
<input type="number" value="<?php echo $_SESSION['product_count'][$i];?>" min="1" max="20" name="p_count" />
<input type="hidden" value="<?php echo $i;?>" name="upd_id"/>
<input type="submit" value="Обновить" /> 
</form>
<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
<input type="hidden" value="<?php echo $i;?>" name="del_id" />
<input type="Submit" value="Удалить" />
</form>
</td>
<td><?php echo $_SESSION['product_price'][$i];?></td>
<td><?php echo $_SESSION['product_price'][$i]* $_SESSION['product_count'][$i];?></td>
</tr>
<?php
}

if (isset($_POST['upd_id'])) {
update_cart($_POST['p_count'], $_POST['upd_id']);
}
if (isset($_POST['del_id'])) {
remove_from_cart($_POST['del_id']);
}

function remove_from_cart($delete_key) { 
unset($_SESSION['product_id'][$delete_key]); 
unset($_SESSION['product_price'][$delete_key]); 
unset($_SESSION['product_count'][$delete_key]); 
$_SESSION['prod_count']=$_SESSION['prod_count']-1; 
sort($_SESSION['product_id']); 
sort($_SESSION['product_price']); 
sort($_SESSION['product_count']); 
update_cart_sum(); 
}

function update_cart($cnt, $update_key) { 
$_SESSION['product_count'][$update_key]=$cnt; 
update_cart_sum(); 
}

function update_cart_sum() { 
$_SESSION['cart_sum']=0; 
for ($i=0; $i<$_SESSION['prod_count']; $i++) { 
$_SESSION['cart_sum']=$_SESSION['cart_sum'] + $_SESSION['product_price'][$i]* $_SESSION['product_count'][$i]; 
} 
}

?>
<tr>
	<td colspan="4" style="padding: 15px; text-align: right;">
		<?php
			echo "<p>Общая стоимость заказа:\t".$_SESSION['cart_sum']." бел.руб.</p>";
		?>
	</td>
</tr>
</table> 


<form class="col-md-12 order" action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
<input type="hidden" value="1" name="order" />
<?php
	
	if(isset($_SESSION['login'])) {
		include "order_form.php";
	}
	else echo "<p class=\"col-md-12\">Чтобы сделать заказ, <a href=\"index.php\">войдите</a> или <a href=\"reg.php\">зарегистрируйтесь</a>.</p>";

?>

<!-- <input class="cl-md-4" type="Submit" value="Заказать" /> -->
</form>

<?php
$goods="";
$amount="";
$sum = 0;

if(isset($_POST['order']))
{
	foreach ($_SESSION['product_id'] as $value) {
		$goods.=$value ;
		$goods.="," ;
	}
	//echo $goods;
	//echo "<br><br>";
	foreach ($_SESSION['product_count'] as $value) {
		$amount.=$value ;
		$amount.="," ;
		$sum += $value;
	}
	
	//echo $amount;
	//echo $_SESSION['cart_sum'];

	
		
		//echo $_POST['order_f'];
		$userlog = $_SESSION['login'];
		$res = mysqli_query($dbc,"SELECT * FROM users where login='$userlog'");
		//print_r($_COOKIE) ;
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		//echo "<br><br>";
		//echo $row['id'];
		$id = $row['id'];
		if (isset($_POST['address'])) { $address = $_POST['address']; }
		if (isset($_POST['time_pref'])) { $time_pref = $_POST['time_pref']; }
		//"SELECT * FROM goods where category='$flag'"
		if (isset($_POST['order_f'])){
			$result2 = mysqli_query($dbc,"INSERT INTO orders (user_id,status,goods,amount,address,time_pref) VALUES ('$id',1,'$goods','$amount','$address','$time_pref')" );

			$to      = $row['email'];
			$subject = 'Ваш заказ на Tableware';
			$message = 'Вы заказали '.$sum.' предметов на Tableware, общая стоимость = '.$_SESSION['cart_sum'].'.';
			$headers = 'From: Tableware shop';

			mail($to, $subject, $message, $headers);
		}
		
	 
}



?>

</section>
<?php
require_once "footer.php";
?>	
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<link href=\"style/bootstrap.css\" rel=\"stylesheet\">