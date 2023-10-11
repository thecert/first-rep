<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"> 
    <title>форма</title>
</head>
	<body>
<?php


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
if($_POST['password']!==$_POST['password2']){
    exit('Пароли не совпадают!');
       }
	   echo 'Здравствуйте, '.htmlspecialchars($_POST['login']).'.<br>';
	   echo 'Ваш аккаунт создан'.'.<br>';
     
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
	    
     $select = $connection->prepare( "SELECT COUNT(`id`) as cnt FROM `users` WHERE `login` = ? OR `email` = ?;" ); 
    $res = $select->execute([ $_POST['login'],$_POST['email'] ] );
    $row = $select->fetch();

    if(!$res ){
        exit( 'Ошибка регистрации...');
    }

    if( $res && isset($row['cnt']) && $row[0] > 0 ){
    exit( 'Ошибка регистрации... (Пользователь уже существует)' );
    }

    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $connection->prepare("INSERT INTO `users` ( login, email, password) VALUES (:log, :email, :pass)");

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':log', $login);
    $stmt->bindParam(':pass', $pass_hash);

    if ($stmt->execute()) {
        echo 'Здравствуйте, '.$login.'. <br>';
        echo 'Вы зарегистрированы';
        } 
        else {
        echo "Ошибка при выполнении запроса";
        }   
?> 

</body>