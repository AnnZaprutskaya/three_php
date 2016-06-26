
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>

<title>Contacts</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
<link href=\"style/bootstrap.css\" rel=\"stylesheet\">
</head>

<body>
<header>
<?php
	require_once 'navbar.php';
?>
</header>

<section class="category_list col-md-3" >
	<?php
	require_once 'left.php';
	?>
</section>
<section class="content col-md-9" style="padding:20px; padding-left: 50px;">
	<h2 class="col-md-12 contact_header">Наши магазины расположены по адресам:</h2>
	<ul class="col-md-4 contact_list">

	<?php
	require_once 'config2.inc.php';

	$result2 = mysqli_query($dbc,"SELECT * FROM shops");

	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
	{	
			echo "<li>".$row['address']."</li>";
	}
	
	?>
	<hr>
	<li>Единый график работы магазинов сети:</li>
	<em>
	<li>Пн-Сб: 10.00-21.00</li>
	<li>Вс: 11.00-19.00</li>	
	</em>
	</ul>
	<div class="col-md-8 col-xs-10 col-sm-11 map">
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=77Q8xFEvEWc_INuQTwWnKjr7P8sHxOWr&width=500&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script>
	</div>
</section>

<?php
require_once "footer.php";
?>	
</body>

</html>
