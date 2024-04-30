<?php
include('connect.php');

// '$_POST['register']' and '$_POST['login']' comes from index's hidden input element

if (isset($_POST['register'])) {
  // Sanitize inputs
  $name = htmlspecialchars($_POST['login_username']);
  $email = htmlspecialchars($_POST['login_email']);
  // Hash the password
  $password = password_hash(htmlspecialchars($_POST['login_password']), PASSWORD_DEFAULT);

  $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$name', '$email', '$password')";

  echo mysqli_query($conn, $sql) ? "register_ok" : "register_fail"; // Sends a string status to javascript fetch response
}

if (isset($_POST['login'])) {
  $name = htmlspecialchars($_POST['login_username']);
  $password = htmlspecialchars($_POST['login_password']);

  $sql = "SELECT `username`, `password` FROM users WHERE username = '$name'";
  $query = mysqli_query($conn, $sql);

  try {
    $result = mysqli_fetch_assoc($query);
    if (sizeof($result) > 0) {
      if (password_verify($password, $result['password'])) {
        echo "redirect"; // Sends a string status to javascript fetch response
      }
    }
  } catch (TypeError) {
    echo "Query is empty..."; // Sends a string status to javascript fetch response
  }
}
