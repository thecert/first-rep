<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма регистрации</title>
    </head>
    <body>
        <form action=".php" method="post">
          <label for="mail">Почта
             <input type="email" name="email" placeholder="E-mail" required></label><br>
          
           <label for="login">Логин
             <input type="login" name="text" placeholder="login" required></label><br>
          
          <label for="password">Пароль
             <input type="password" name="password" placeholder="Пароль" required ></label><br>
          
                <label for="password">Пароль
             <input type="password" name="password" placeholder="Подтверждение пароля" required ></label><br>
          
            <p>Зарегистрироваться <input type="submit"></p> 
        </form>
    </body>
</html>
