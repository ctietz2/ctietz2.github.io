<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
</head>
<body>
  <h2>Registration Form</h2>
  <form method="POST" action="register.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
    
    <input type="submit" value="Register">
  </form>
</body>
</html>