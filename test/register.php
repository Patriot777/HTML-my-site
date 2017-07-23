<?php require_once("includes/connection.php"); ?>
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
  <!---->
<?php
  
  if(isset($_POST["register"])){
  
  if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
  $email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
  $numrows=mysql_num_rows($query);
if($numrows==0)
   {
  $sql="INSERT INTO usertbl
  (full_name, email, username,password)
  VALUES('$full_name','$email', '$username', '$password')";
  $result=mysql_query($sql);
 if($result){
  $message = "Account Successfully Created";
} else {
 $message = "Failed to insert data information!";
  }
  } else {
  $message = "That username already exists! Please try another one!";
   }
  } else {
  $message = "All fields are required!";
  }
  }
  ?>

  <?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>




      <!---->
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
<div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-push-2 text-center">
    <div class="register">
      <div id="login">
        <h1 id="exit">Реєстрація</h1>
          <form action="register.php" id="registerform" method="post" name="registerform" class="forms">
            <p class="info"><label for="user_login">Імя та прізвище<br>
            <input class="input" id="full_name" name="full_name" size="32"  type="text" value=""></label></p>

            <p class="info"><label for="user_pass">E-mail<br>
            <input class="input" id="email" name="email" size="32" type="email" value=""></label></p>

            <p class="info"><label for="user_pass">Логін<br>
            <input class="input" id="username" name="username" size="20" type="text" value=""></label></p>

            <p class="info"><label for="user_pass">Пароль<br>
            <input class="input" id="password" name="password" size="32"   type="password" value=""></label></p>

            <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Реєстрація"></p>
        
            <p class="regtext"><a href= "index.php">Ввести логін та пароль</a>!</p>
          </form>
      </div>
    </div>
</div>
</div>
</div>

  </body>
  </html>