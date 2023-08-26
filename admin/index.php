



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Glassmorphism Login form</title>
  <link rel="stylesheet" href="assets/css/login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <div class="form-box">
    <div class="form-value">
      <form action="adminlogin.php" method="post">
        <h2>Login</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" name="user" required>
          <label for="">Email</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="pwd" required>
          <label for="">Password</label>
        </div>
        <div class="forget">
          <label>
            <input type="checkbox"> Remember me
          </label>
          <label>
            <a href="#">Forgot password?</a>
          </label>
        </div>
        <button type="submit" name="login">Log in</button>

        <!-- <div class="register">
          <p>Don't have a account ? <a href="#">Register</a></p>
        </div> -->
      </form>
    </div>
  </div>
</section>
<!-- partial -->
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>
</html>
