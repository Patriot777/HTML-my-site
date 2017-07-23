<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TEST</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main2.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
            <!--Блок кода шапка з логотипом-->
      <div class="container text-center">
        <div class="row">
          <div class="col-xs-12 col-md-12 col-lg-12 text-center">
            <h1><span id="type1">Social</span><span id="type">TYPE</span></h1>
          </div>    
        </div>
      </div>
      <hr>
            <!--Блок кода шапка з логотипом КІНЕЦЬ-->

            <!--Код на PHP-->
        <?php include_once("progress.php"); ?>
            <!--Код на PHP КІНЕЦЬ-->

            <!--Блок входу в систему-->
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-push-2 text-center">
        <div id="login">
          <h1 id="exit">Вхід</h1>
            <form action="" id="loginform" method="post" name="loginform">
              <p class="info input"><label for="user_login">Імя користувача<br>
              <input class="input" id="username" name="username" size="20"
              type="text" value=""></label></p>

              <p class="info"><label for="user_pass">Пароль<br>
              <input class="input" id="password" name="password" size="20"
              type="password" value=""></label></p> 
  
              <p class="submit"><input class="button" name="login" type= "submit" value="Log In"></p>
  
              <a href= "register.php" id="register">Реєстрація</a>!</p>
            </form>
        </div>
      </div>
    </div>
  </div>

            <!--Блок входу в систему КІНЕЦЬ-->




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>