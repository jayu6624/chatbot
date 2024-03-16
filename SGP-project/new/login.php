<?php
    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        $password=$_POST['password'];


        $host='localhost';
        $user='root';
        $pass='';
        $dbname='first_database';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        $sql="INSERT INTO login_page(Email,Password) values('$name','$password')";
        mysqli_qurey($conn,$sql);
    }
    
    
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <h2>Login</h2>
    <form action="login.php" method="post">
      <label for="username">Username:</label><br />
      <input type="text" id="username" name="username" /><br />
      <label for="password">Password:</label><br />
      <input type="password" id="password" name="password" /><br /><br />
      <input type="submit" value="Login" name="submit" />
    </form>
  </body>
</html>