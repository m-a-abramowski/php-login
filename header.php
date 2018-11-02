<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav>
        <ul>
          <li> <a href="index.php">Home</a></li>
          <li> <a href="#">Bullshit</a></li>
          <li> <a href="#">About bullshit</a></li>
          <li> <a href="#">Contact with bullshit</a></li>
        </ul>
        <div class="">
          <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php">Signup</a>
          <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>
        </div>
      </nav>

    </header>
