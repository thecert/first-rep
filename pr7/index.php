<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма регистрации</title>
    </head>
    <body>
        <form action="actions.php" method="post">
          <label for="mail">Почта
             <input type="email" name="email" placeholder="E-mail" required></label><br><br>
          
           <label for="login">Логин
             <input type="text" name="login" placeholder="login" required></label><br><br>
          
          <label for="password">Пароль
             <input type="password" name="password" placeholder="Пароль" required ></label><br><br>
          
                <label for="password">Подтверждение пароля
             <input type="password" name="password2" placeholder="Подтверждение пароля" required ></label><br><br>
          
            <p><input type ="submit" value="Зарегестрироваться" required</p> 
        </form>
    </body>
</html>
