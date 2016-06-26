<?php

require_once 'navbar.php';


    ?>
    <html>
    <head>
    <title>Главная страница</title>
    </head>
    <body>
    
    <section class="category_list col-md-3">
    <?php
    require_once 'left.php';
    ?>
    </section>
    <section class="content col-md-9">

    <h2>Главная страница</h2>
    <form action="testreg.php" method="post">

 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    <p>
    <input type="submit" name="submit" value="Войти">

    
<br>

<a href="reg.php">Зарегистрироваться</a> 
    </p></form>
    <br>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "Вы вошли на сайт как гость.<br>";
    }
    else
    {

    echo "Вы вошли на сайт как ".$_SESSION['login']."<br>";
    //setcookie('reg','true');
    }
    ?>
    </section>
    <?php
    require_once "footer.php";
    ?>  
    </body>
</html>