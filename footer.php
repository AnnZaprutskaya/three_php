<footer class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
	<hr>

	<ul class="nav col-md-12 col-sm-12">    
	<?php
		$cl="col-md-2"
	?>    
		  <li  <?php if((substr_count($addr,"all_products")!= 0) || (substr_count($addr,"good"))) { echo "class='active col-md-offset-3 ".$cl."'";} else echo "class='col-md-offset-3 ".$cl."'"; ?> ><a href="all_products.php">Каталог</a></li>
          <li  <?php if(substr_count($addr,"contacts")!= 0)  { echo "class='active ".$cl."'"; } else echo "class='".$cl."'"; ?>  ><a href="contacts.php">Контакты</a></li>
          <li  <?php if(substr_count($addr,"basket")!= 0) { echo "class='active ".$cl."'"; } else echo "class='".$cl."'"; ?>  ><a href="basket.php">Корзина</a></li>
          <?php      
          if($row['is_admin']>0)  {
                if(substr_count($addr,"admin")!= 0)
                {
                    echo "<li  class='active ".$cl."'>  <a href=\"admin.php\">Управление</a></li>";
                }
                else
                {
                    echo "<li class='".$cl."'>  <a href=\"admin.php\">Управление</a></li>"; 
                } 
              }       
          ?>
        </ul> 

	<p>
	<small>
	<ul class="col-md-6">
	<li>Наши магазины (Пн-Сб: 10.00-21.00, Вс: 11.00-19.00):</li>
	<br>
	<?php
	require_once 'config2.inc.php';

	$result2 = mysqli_query($dbc,"SELECT * FROM shops");

	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
	{	
			echo "<li>".$row['address']."</li>";
	}	
	?>		
	</ul>
	</small>
	</p>
	<p class="col-md-6">&copy; Запрутская Анна, 2016 БГУ</p>
</footer>