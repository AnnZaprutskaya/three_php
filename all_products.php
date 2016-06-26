<link rel="stylesheet" type="text/css" href="style.css">


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
<section class="content site-wrap col-md-9">



<?php

Error_Reporting(E_ALL & ~E_NOTICE);

include('config2.inc.php');

// Устанавливаем количество записей, которые будут выводиться на одной странице


$page = $_GET['page'];

// Если значение page= не является числом, то показываем
// пользователю первую страницу
if(!is_numeric($page)) $page=1;


// Если пользователь вручную поменяет в адресной строке значение page= на нуль,
// то мы определим это и поменяем на единицу, то-есть отправим на первую
// страницу, чтобы избежать ошибки
if ($page<1) $page=1;


$quantity=4;
if(isset($_GET['query'])){
	$flag = $_GET['query'];

	$result2 = mysqli_query($dbc,"SELECT * FROM goods where name like '%$flag%'");
	echo "<h4 style=\"padding-left:10px;\">Результаты поиска по запросу: ".$flag."</h4> <br>";
}
else {
	if(isset($_GET['category'])){
		$flag = $_GET['category'];	
		$result2 = mysqli_query($dbc,"SELECT * FROM goods where category='$flag'");
	}
	else
	{
		$flag = -999;		
		
		$result2 = mysqli_query($dbc,"SELECT * FROM goods;");
	}
}


$num = mysqli_num_rows($result2);


if($flag>=0)
{
	$quantity= $num+1;
}

if($flag < 0){
	$pages = $num/$quantity;

	// Округляем полученное число страниц в большую сторону
	$pages = ceil($pages);

	// Если значение page= больше числа страниц, то выводим первую страницу
	if ($page>$pages) $page = $pages;

	for($i=0;$row = mysqli_fetch_array($result2, MYSQLI_ASSOC); $i++)
	{
	
		if($i < $page*$quantity&&$i>($page-1)*$quantity) 
		{
			include "preview.php";
		}
	}



	$newpage=$page+1;
	$oldpage=$page-1;

	if($oldpage >= 1 && $flag < 0) {
		echo " <section class=\"col-md-12\"> <a class=\"col-md-6\" href=all_products.php?page=$oldpage > <img src=\"img/left1.png\"  style=\"float:left;\" title=\"previous\"> </a>";   
	}   
	if($newpage <= $pages  && $flag < 0) { 
	echo "<a class=\"col-md-6\" href=all_products.php?page=$newpage > <img src=\"img/right1.png\" style=\"float:right;\" title=\"next\"> </a> </section>";
	}

}
else
{
	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
	{	
			include "preview.php";
	}
}

?>

</section>
<?php
require_once "footer.php";
?>	