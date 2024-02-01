<?php
//  session_start();
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Resgistration Form</h1><br><br>
       <form action="#" method="post">
                <label >First Name</label>
                <input type="text" name="fn"><br><br>
                <label >Last Name</label>
                <input type="text" name="ln"><br><br>
                <label >Email</label>
                <input type="email" name="email"><br><br>
                <label >password</label>
                <input type="password" name="pswrd"><br><br>
                <label >ID</label>
                <input type="text" name="id"><br><br>
                <label >Gender</label>
                <select name="gender">
                    <option value="not selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <label >Social Media</label>
                <input type="radio" name="smedia" value="insta"><label>Insta</label>
                <input type="radio" name="smedia" value="whatsapp"><label>WhatsApp</label>
                <input type="radio" name="smedia" value="facebook"><label>Facebook</label><br><br><br><br>
                <input type="submit" name="sig" value="SIGNUP">
                <h3> <a href="login.php">login</a></h3>
       </form>
</body>
</html>

<?php

   if(isset($_POST['sig'])){
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $em=$_POST['email'];
    $ps=$_POST['pswrd'];
    $id=$_POST['id'];
    $gn=$_POST['gender'];
    $Sm=$_POST['smedia'];

   if($fn!="" && $ln!="" && $em!="" && $ps!="" && $id!="" && $gn!="" && $Sm!=""){
           
      $IDexit=$_SESSION['i_data'];
      $query="SELECT *FROM  registration WHERE id ='$id' ";
      $data=mysqli_query($con,$query);
      $found=mysqli_num_rows($data);
      if($found){
        echo "<script>alert('ENTER NEW ID')</script>";
      }
      else{
        $query="INSERT INTO registration VALUES('$fn','$ln','$em','$ps','$id','$gn','$Sm')";
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
   echo "<script>alert('fill the form')</script>";
  }
}
?>
 <!-- $query="INSERT INTO registration VALUES('$fn','$ln','$em','$ps','$id','$gn','$Sm')";
            $data=mysqli_query($con,$query); -->