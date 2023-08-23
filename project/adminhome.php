<?php
    session_start();

if(!empty($_SESSION['login'])){
    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .navbar {
            display:flex;
            justify-content:space-between;
            align-item:center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        
        .navbar li {
            float: left;
        }
        
        .navbar li a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        .navbar li a:hover {
            background-color: #111;
        }
        
        .content {
            padding: 20px;
        }

        .login_btn{
            padding:5px 13px;
            background:gray;
            color:white;
            border-radius:5px;
            margin-top:40px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="application.php">Applications</a></li>
            <li><a href="student_list.php">Student list</a></li>
           
        </ul>

        <div class="logout">
            <a href="logout.php" class="login_btn">Logout</a>
        </div>
    </div>
    <div class="content">
        <h1>Welcome to the Admin Dashboard!</h1>
        <!-- Rest of the content goes here -->
    </div>
</body>
</html>


<?php
}

?>




 