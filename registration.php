<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  <title>Приветствие</title>
 </head>
 <body>
  <header>
      <div class="container">
        <nav>
          <ul class="menu">
            <li class="menu_item"><a class="menu_link" href="index.html" class="menu_link">Главная</a></li>
            <li class="menu_item"><a class="menu_link" href="registration.php" class="menu_link">Регистрация</a></li>
            <li class="menu_item"><a class="menu_link" href="authorization.html" class="menu_link">Авторизация</a></li>             
          </ul>
        </nav>
        <h1>Регистрация</h1>
        <form action="#" method="POST">
          <p><strong>Электронная почта:</strong>
          <input type="email" placeholder="Электронная почта" name="user" required autofocus>
          <p><strong>Пароль:</strong>
          <input type="password" placeholder="пароль" name="password" required>
          <p><strong>Номер телефона:</strong>
          <input placeholder="Номер телефона +78.." name="phone" required>
          <p><strong>Ваш пол:</strong>
          <input type="radio" name="State" value="M"> Мужик</p> 
          <input type="radio" name="State" value="W"> Баба</p> 
          <p><strong>Дата рождения:</strong>
          <p><input name="birth_date" required pattern="[0-9]{2}\.[0-9]{2}\.[0-9]{4}"></p>
          
          <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Запомнить меня
          </label>
        </p>
        <input type="submit" value="отправить">
        </form>
      </div>
  </header>
  <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
  <script src="js/jquery.js" type="text/javascript"></script>

  
 </body>
</html>