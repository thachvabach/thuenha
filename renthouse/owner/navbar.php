<!DOCTYPE html>
<html lang="en">

<head>
  <title>KingLand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-header" href="owner-index.php">
        <img src="../images/logo2.png" alt="logo" style="height:50px;">
      </a>
      <!-- thanh navigation -->
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="owner-index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/">Liên Hệ</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION["email"]) && !empty($_SESSION['email'])) {
          echo '<li><a href="../logout.php">Logout</a></li>';
        } else { ?>
        <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
        <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>

  </body>

</html>