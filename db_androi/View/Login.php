<!DOCTYPE html>
<html>
<head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container {
  padding: 16px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 40%;
}


</style>
</head>
<body>

<form class="modal-content animate" action="C_Login.php" method="GET">

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" name = "slog">Login</button>
      
  </form>

</body>
</html>
