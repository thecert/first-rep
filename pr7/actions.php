<body>
<?php
 $host       = "db4.myarena.ru";      // Адрес сервера базы данных
 $dbname     = "u19978_a05";    // Имя базы данных
 $user       = "u19978_a05";           // Имя пользователя
 $password   = "W2n8U5x1A1";               // Пароль
 

     $link = '<a href = "./index.php">На главную</a>';
try {
  $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
} catch (\Throwable $th) {
  echo('Ошибка подключения');
}

if(empty($_POST['email']) ) {
  exit('Ввведите значение в email');
       }
if(empty($_POST['login']) ) {
  exit('Ввведите значение в login');
       }

if(empty($_POST['password']) ) {
  exit('Ввведите значение в пароль');
       }
       if(strlen($_POST['password'])<8 ) {
        exit('Пароль слишком короткий ');
             }      

if(empty($_POST['password2']) ) {
  exit('Ввведите значение в подтверждение пароля');
}
if($_POST['passwrod']!==$_POST['passwrod2']){
    exit('Пароли не совпадают!');
       }
	   echo 'Здравствуйте, '.htmlspecialchars($_POST['login']).'.<br>';
	   echo 'Ваш аккаунт создан'.'.<br>';
     
?> 
</body>