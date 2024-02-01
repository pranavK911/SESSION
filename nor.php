<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
      <label >images</label>
      <input type="file" name="imggg">
      <input type="submit">
</form>
</body>
</html>


<?php
error_reporting(0);
 if(isset($_FILES['imggg'])){
    // print_r($_FILES);
    $nam=$_FILES['imggg']['name'];
    $tempname=$_FILES['imggg']['tmp_name'];
     $folder="img/".$nam;
    move_uploaded_file($tempname,$folder);
    echo $folder;
}    


// $nf= $_FILES["imgg"]["name"];
// // echo $nf;
// $tnf= $_FILES["imgg"]["tmp_name"];
// // $filee=$_FILES['imggg']["tmp_name"];
// print_r( $_FILES['imggg']);
// $folder="img/".$nf;
// // move_uploaded_file($filee,$folder);
// // echo $folder;
// ?>