<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/master.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="tab">
        <div class="title">
          <h1>Login Admin</h1>
        </div>
        <div class="form">
          <form class="" action="function/loginAdmin.php" method="post">
            <div class="input-group">
                <label>Username</label>
                <input class="input" type="text" name="username" value="">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input class="input" type="password" name="password" value="">
            </div>
            <?php

              if(isset($_GET['login'])){
                echo "<p>Username atau Password salah</p>";
              }

             ?>
            <input type="submit" name="submit" value="Login" class="button-login">
          </form>
        </div>

      </div>
    </div>
  </body>
</html>
