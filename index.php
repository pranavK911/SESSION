<?php
    session_start();
   include('connection.php');

    $userid=$_SESSION['i_data'];
    if($userid){
        // echo "<script>alert('LOGIN SUCCESFUL')</script>";
    }else{
        header('location:login.php');
    }
    $query="SELECT * FROM  mydata WHERE id ='$userid' ";
    $data=mysqli_query($con,$query);
    $result=mysqli_fetch_assoc($data);
    // $imagee=$result['image'];
    // echo $imagee;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Hotel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        #user-container {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            color: #fff;
        }

        #user-image {
            max-width: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #555;
        }

        section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .section-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav .add:hover{
        background-color:  rgb(29 ,161 ,242);
        color: #fff;
        }
    </style>
</head>
<body>

    <header>
    <h1>Awesome Hotel</h1>
        <div id="user-container">
            <img id="user-image" src="img/<?php echo $result['image'];?>" alt="User Image">
            <span id="user-name"><?php echo $result['fn'];?></span>
        </div>
    </header>
    <!-- <?php $result['image'];?> -->

    <nav>
        <a href="#home">Home</a>
        <a href="#rooms">Rooms</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
        <a href="logout.php" class="add">LOGOUT</a>
    </nav>

    <section id="home">
        <img src="img/lobby.jpg" alt="Hotel Lobby" class="section-image">
        <h2>Welcome to Awesome Hotel</h2>
        <p>Experience luxury and comfort at our world-class hotel. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <section id="rooms">
        <img src="img/room.jpg" alt="Hotel Rooms" class="section-image">
        <h2>Our Rooms</h2>
        <p>Discover our spacious and elegantly designed rooms. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <section id="about">
        <img src="img/archi.jpg" alt="About Us" class="section-image">
        <h2>About Us</h2>
        
        <p>Learn about the history and values of Awesome Hotel. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <section id="contact">
        <img src="img/rece.jpg" alt="Contact Us" class="section-image">
        <h2>Contact Us</h2>
        <p>Have questions or want to book a room? Contact us today! Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </section>

    <footer>
        &copy; 2024 Awesome Hotel. All rights reserved.
    </footer>

</body>
</html> 


