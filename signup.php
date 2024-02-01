<?php
//  session_start();
  include('connection.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 150vh;
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
      display: flex;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    select {
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

    .login-link {
      display: block;
      margin-top: 10px;
      color: #333;
      text-decoration: none;
    }
 .dis{
   display:flex;
   justify-content: center;
   align-items: center;
}
  </style>
</head>
<body>

  <form action="#" method="post" enctype="multipart/form-data">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="images">Upload Images</label>
    <input type="file" name="image" required>

    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
    <label >Social Media:</label>
   <div class="dis">
 
    <input type="radio" id="subscribeYes" name="smedia" value="insta"> Instagram
    <input type="radio" id="subscribeYes" name="smedia" value="facebook"> Facebook
    <input type="radio" id="subscribeNo" name="smedia" value="whatsapp" > WhatsApp
</div>
    <button type="submit" name="sig">Sign Up</button>
    <a href="login.php" class="login-link">Already have an account? Login</a>
  </form>

</body>
</html>


<?php
   if(isset($_POST['sig'])){
    $fn=$_POST['firstName'];
    $ln=$_POST['lastName'];
    $em=$_POST['email'];
    $ps=$_POST['password'];
    $id=$_POST['id'];
    $gn=$_POST['gender'];
    $Sm=$_POST['smedia'];

   if($fn!="" && $ln!="" && $em!="" && $ps!="" && $id!="" && $gn!="" && $Sm!=""){
           
      $IDexit=$_SESSION['i_data'];
      $query="SELECT *FROM  mydata WHERE id ='$id' ";
      $data=mysqli_query($con,$query);
      $found=mysqli_num_rows($data);
      if($found){
        echo "<script>alert('ENTER NEW ID')</script>";
      }
      else{
        $nam=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        $folder="img/".$nam;
        move_uploaded_file($tempname,$folder);
        $query="INSERT INTO mydata VALUES('$fn','$ln','$em','$ps','$id','$gn','$Sm','$nam')";
        $data=mysqli_query($con,$query);
        if($data){
          echo "<script>alert('DATA INSERTED')</script>";
        }
        else{
          echo "<script>alert('DATA NOT INSERTED')</script>";
        }
      }
    }
  else{
   echo "<script>alert('PLEASE INSERT DATA')</script>";
  }
}
?>
 