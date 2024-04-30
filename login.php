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
    <h1>Login</h1>
    <form id="login-form">
      <div class="input-row">
        <label for="logininput-username">Username</label>
        <input type="text" name="login_username" id="logininput-username" required>
      </div>
      <div class="input-row">
        <label for="logininput-password">Password</label>
        <input type="password" name="login_password" id="logininput-password" required>
      </div>
      <!-- in order to identify which operation is triggered, we need to add 'login' to $_POST superglobal -->
      <input type="hidden" name="login" value="login">
      <div class="button-row">
        <button class="button" type="submit">Login</button>
        <a class="button" href="index.php">Register</a>
      </div>
    </form>
  </main>
  <script src="./script.js"></script>
</body>
</html>