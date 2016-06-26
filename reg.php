<html>
    <head>
    <title>Регистрация</title>
    </head>

    <body>

    <?php
    require_once 'navbar.php';
    ?>
    
    <section class="category_list col-md-3">
    <?php
    require_once 'left.php';
    ?>
    </section>
    <section class="content col-md-9">

    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
    

<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15" required>
    </p>


    <label>Ваш e-mail:<br></label>
    <input name="email" type="email" size="30" maxlength="30"  required>
    </p>
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15"  required>
    </p>


<p>
    <input type="submit" name="submit" value="Зарегистрироваться">


</p></form>
    </section>
    <?php
    require_once "footer.php";
    ?>  
    </body>
    
</html>