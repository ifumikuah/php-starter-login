<?php
  include('process.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%2210 0 100 100%22><text y=%22.90em%22 font-size=%2290%22>💥</text></svg>"></link>
  <title>Dynamic Site</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <main class="login-container">
    <h1>Register</h1>
    <form id="login-form">
      <div class="input-row">
        <label for="logininput-username">Username</label>
        <input type="text" name="login_username" id="logininput-username" required>
      </div>
      <div class="input-row">
        <label for="logininput-email">Email</label>
        <input type="email" name="login_email" id="logininput-email" required>
      </div>
      <div class="input-row">
        <label for="logininput-password">Password</label>
        <input type="password" name="login_password" id="logininput-password" required>
      </div>
      <!-- in order to identify which operation is triggered, we need to add 'register' to $_POST superglobal -->
      <input type="hidden" name="register" value="register">
      <div class="button-row">
        <button class="button" type="submit">Submit</button>
        <a class="button" href="login.php">Login</a>
      </div>
      <div class="redirect-msg">You will redirected to login page after <span id="redir-second">5</span> second/s</div>
    </form>
  </main>
  <script src="./script.js"></script>
</body>
</html>