<?php
require_once 'navbar.php';

include "config2.inc.php";

$result2 = mysqli_query($dbc,"SELECT * FROM materials");
$numb = mysqli_num_rows($result2);
$result3 = mysqli_query($dbc,"SELECT * FROM categories");
$numb3 = mysqli_num_rows($result3);
//echo $numb;
?>


<section class="category_list col-md-3">
	<?php
	require_once 'left.php';
	?>
</section>

<section class="content col-md-9"> 
<fieldset class="col-md-12">
<legend>Добавление нового товара:</legend>
<form action="#" method="post" id="add_good">

 <p>
    <label>Название:</label>
    <input name="name" type="text" size="30" maxlength="30" required><br>
    <?php
    echo "
  	<label>Материал:</label> 
  	<input name=\"material\" type=\"number\" min=\"1\" max=\"".$numb."\" value=\"1\">
  	";
  	?>
    <!-- <input name="material" type="text" size="30" maxlength="30"> --><br>
    Информация о товаре:</p>
  <p><textarea style="max-width: 450px; max-height: 300px;" name="info" size="75" maxlength="75"></textarea></p>
  	<label>Путь к изображению:</label>
  	<input type="file" name="img_path" required>
    <!-- <input name="img_path" type="text" pattern="img/+^[a-zA-Z]+$+.jpg" size="50" maxlength="50" required><br> -->
    <?php
    echo "
  	<label>Категория:</label> 
  	<input name=\"category\" type=\"number\" min=\"1\" max=\"".$numb3."\" value=\"1\">
  	";
  	?>
    <!-- <input name="category" type="text" size="15" maxlength="15"> --><br>
    <label>Количество на складе:</label>
    <input name="amount" type="text" size="15" maxlength="15" pattern="[0-9]{0,5}"><br>
    <label>Цена:</label>
    <input name="price" type="text" size="15" maxlength="15" pattern="[0-9]{4,15}" required><br>
    <label>Скидка:</label>
    <input name="sale" type="text" size="15" pattern="[0-9]{0,3}" maxlength="15"><br>
    <p>
    <input type="submit" name="submit"  value="Добавить товар">
</p></form>
</fieldset>
	<section class="col-md-12">
		<?php
		// $query="SELECT * FROM goods ";        
        //$result2 = mysqli_query($dbc,$query);    
        //echo "<h3>Заказы:</h3>";    
       // while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC))
       // 	{
        //		echo "<p>".$row['id']."</p>";
        //		print_r($row); //оформить вывод
        //	}
		if(empty($_SESSION['admin'])) {
				echo "<br><p class=\"col-md-12\"><a href=\"index.php\">Войдите</a> от лица администратора, чтобы работать с этой страницей</a>.</p>";
		}
		?>
	</section>
</section>

<?php
require_once "footer.php";
?>	

<?php
$name = $_POST['name'];
$material = $_POST['material'];
$info = $_POST['info'];
$img_path =$_POST['img_path'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$price = $_POST['price'];
$sale = $_POST['sale'];

//echo $img_path;

//$pos = strpos($img_path,"img");
//$img_path = substr($img_path,$pos);
$img_path="img/".$img_path;
//$endpos = strripos($img_path,"jpg") + 2;

//if(empty($endpos)) $endpos = strripos($img_path,"jpeg") + 3;
//if(empty($endpos)) $endpos = strripos($img_path,"png") + 2;

if(!empty($_SESSION['login']) && !empty($_SESSION['id']) && !empty($_SESSION['admin']))
{
	if(!empty('submit') && !empty('name') && !empty('img_path') && !empty('price')) {
	$result_add = mysqli_query($dbc,"INSERT INTO goods (name, material,info,img_path,category,amount,price,sale) VALUES ('$name','$material' ,'$info','$img_path','$category','$amount','$price','$sale')");
	echo "<p>Добавление товара успешно выполнено.</p>";
	}
	else { 
		echo "<p>Недостаточно данных для добавления товара.</p>";
	}
}
?>

<link rel="stylesheet" type="text/css" href="style.css">
<link href="style/bootstrap.css" rel="stylesheet">