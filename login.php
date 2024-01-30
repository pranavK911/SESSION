<?php
session_start();
 include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>LOGIN HERE</h1>
  <br><br>
  <form action="#" method="post">
    <label >ID</label><br>
    <input type="text" name="id"><br><br>
    <label >Password</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="login">
   <h3> <a href="signup.php">Signup</a></h3>
  </form>
</body>
</html>
<?php
  if(isset($_POST['login'])){
    $ide=$_POST['id'];
    $pas=$_POST['password'];

    $query="SELECT *FROM  registration WHERE id ='$ide' && password ='$pas' ";
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