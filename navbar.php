<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<link href="style/bootstrap.css" rel="stylesheet">

<title>Tableware</title>

</head>

<body>

<?php
session_start();
Error_Reporting(E_ALL & ~E_NOTICE);
//include('config2.inc.php');

//print_r($_COOKIE);
$addr = $_SERVER['PHP_SELF']; // c его поомщью проверять меню
//echo $addr;
?>

<header class="col-md-12 col-sm-12">
		<a href="all_products.php"><h1 class="col-md-offset-8 col-md-4 col-sm-8 sitename"> Tableware </h1>  </a>	
    <?php
    if(!empty($_SESSION['login'])) {
      $_SESSION['prev_page'] = $_SERVER['REQUEST_URI'];
      echo "<p class=\"col-md-offset-9 col-md-3 col-sm-8 hello\">Привет, ".$_SESSION['login'].". \t<a href=\"out.php\">Выйти</a></p>"; // мб убрать это?
      //$_COOKIE['cur_user'] = $_SESSION['login'];
      
    }
    //if(!empty($_SESSION['id'])) {
    //  echo "<p>Привет, ".$_SESSION['id']."</p>"; // мб убрать это?
      //echo $_COOKIE['reg'];
      //$_COOKIE['cur_user'] = $_SESSION['login'];
    //}
    if(empty($_SESSION['login']) && empty($_SESSION['id'])) 
    {
      if(isset($_SESSION['admin']))
      {
        unset($_SESSION['admin']);
      }
      echo "<p class=\"col-md-offset-8 col-md-4 col-sm-8\" >\t <a href=\"index.php\">Войти</a> \t|\t<a href=\"reg.php\">Зарегистрироваться</a></p>";
    }

    require_once 'config2.inc.php';

          $log = $_SESSION['login'];

        $query="SELECT * FROM users where login='$log' ";
        //"SELECT * FROM goods where category='$flag'"
        //echo $log;
        $result2 = mysqli_query($dbc,$query);
        //print_r($result2);
        //while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
        //{ 
          //echo "<p>".$row['is_admin']."</p>";
        //}
        $row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    ?>    	 
        <ul class="nav nav-tabs col-md-12 col-sm-12">        
          <?php
          include 'menu.php';
          ?>
        </ul> 

        
</header>

</body>
</html>