<?php
    session_start();
   include('connection.php');

    $userid=$_SESSION['i_data'];
    if($userid){
        echo "<script>alert('LOGIN SUCCESFUL')</script>";
    }else{
        header('location:login.php');
    }
    $query="SELECT * FROM  registration WHERE id ='$userid' ";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Hotel Name</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, h3, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 0.5em 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1em;
        }

        section {
            padding: 2em;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .hotel-info {
            text-align: center;
            margin-bottom: 2em;
        }

        .room {
            margin: 1em 0;
            padding: 1em;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .room img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 1em;
        }
       /* h1 a {
        display: block;
        margin-top: 10px;
        color: #333;
        text-decoration: none; 
     } */
      .add
    {
        text-decoration: none;
        background-color: rgb(255, 216, 20);
        height: 40px;
        width: 150px;
        color: #000;
        border-radius: 20px;
        font-size:20px;
        font-weight: bold;
        cursor: pointer;
        border: none;
        border-width: 1px;
        position: absolute; /* Set position absolute for the button */
      top: 10px; /* Adjust top value to your preference */
      right: 10px;
    }
    .add:hover{
        background-color:  rgb(29 ,161 ,242);
        color: #fff;
       font-size: 20px;
    }
    </style>
</head>
<body>
    <header>
        <h1>HOTEL VISION</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Rooms</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>
    <section class="container">
        <div class="hotel-info">
            <h2>Welcome to Our Hotel
                 <?php echo $result['fn'];
                //  echo $result['id'];
                 ?>

                </h2>
            <p>Experience luxury at its finest.</p>
        </div>

        <div class="room">
            <img src="hotel1.jpg" alt="Deluxe Room Image">
            <h3>Deluxe Room</h3>
            <p>Enjoy a spacious and comfortable stay in our deluxe rooms.</p>
        </div>

        <div class="room">
            <img src="hotel2.jpg" alt="Executive Suite Image">
            <h3>Executive Suite</h3>
            <p>Indulge in luxury with our executive suite, featuring stunning views.</p>
        </div>
    </section>
   <!-- <h1> <a href="logout.php" class="add">logout</a></h1> -->
  <button class="add"><a href="logout.php">logout</a></button>
</body>
</html>


