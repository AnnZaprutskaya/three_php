<?php
    session_start();
    Error_Reporting(E_ALL & ~E_NOTICE);
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }


if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
  

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);


    include ("bd.php");
 
$result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'"); 
//извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {


    if ($myrow['password']==$password) {


    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "Вы успешно вошли на сайт!";
    include "all_products.php";
    }
 else {

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
    ?>