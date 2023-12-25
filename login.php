<!DOCTYPE html>
<html lang="en">
<?php

define('DB_USER', "root");
define('DB_PAASWORD', "");
define('DB_DATABASE', "reglog");
define('DB_SERVER', "localhost");

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PAASWORD,DB_DATABASE);
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL: ".mysqli_coonect_error();
}
else
{
//	echo "connected";
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <!-- Add your CSS styles here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2> Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button name="submit" type="submit">Login</button>
        </form>
    </div>
</body>
<?php
    if(isset($_POST['submit'])) 
    {
     
     // Prepare the SQL statement
        $email = $_POST['email'];
        
        $password=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM registration  WHERE email='$email' and password='$password'");
    $num=mysqli_fetch_array($query);
    if($num>0)
    {
     header("location:http:hello.php");
    
}else{
    echo "erro";    
} }
  
    ?>

</html>
