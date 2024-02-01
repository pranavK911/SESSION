<?php
session_start();
 include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .signup-link {
      display: block;
      margin-top: 10px;
      color: #333;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <form action="#" method="post">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="login">Login</button>
    <a href="signup.php" class="signup-link">Don't have an account? Sign Up</a>
  </form>

</body>
</html>

<?php
  if(isset($_POST['login'])){
    $ide=$_POST['id'];
    $pas=$_POST['password'];

    $query="SELECT *FROM  mydata WHERE id ='$ide' && password ='$pas' ";
    $data=mysqli_query($con,$query);
    $found=mysqli_num_rows($data);
    if($found){
      $_SESSION['i_data']=$ide;
      header('location:index.php');
    }
    else{
     
     echo "<script>alert('FIRST INSERT YOUR DATA THEN LOGIN OR PLEASE INSERT CORRECT DATA')</script>";
  
     
    }
  }
?>