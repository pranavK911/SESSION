<?php
  $servername="localhost";
  $user="root";
  $pass="";
  $dbname="database1";

  $con=mysqli_connect($servername,$user,$pass,$dbname);
  if($con){//echo "okkkkkkkkkkkk";
  }
  else{
    echo "connection failed".mysqli_connect_error();
  }
?>