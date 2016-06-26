		<!-- //	<?php
		//	if($row['is_admin']>0) 
		//	{
		//		$cl = "col-md-3";
		//	}
		//	else $cl = "col-md-4";
		//	?> -->

          <li  <?php if((substr_count($addr,"all_products")!= 0) || (substr_count($addr,"good"))) { echo "class='active'";}  ?> ><a href="all_products.php">Каталог</a></li>
          <li  <?php if(substr_count($addr,"contacts")!= 0)  { echo "class='active'"; }  ?>  ><a href="contacts.php">Контакты</a></li>
          <li  <?php if(substr_count($addr,"basket")!= 0) { echo "class='active'"; }  ?>  ><a href="basket.php">Корзина</a></li>
          <?php      
          if($row['is_admin']>0)  {
          		$_SESSION['admin']="true";
                if(substr_count($addr,"admin")!= 0)
                {
                    echo "<li  class='active'>  <a href=\"admin.php\">Управление</a></li>";
                }
                else
                {
                    echo "<li>  <a href=\"admin.php\">Управление</a></li>"; 
                } 
              }       
          ?>
