<?php
    session_start();
	$conn = new mysqli('localhost','root','','admission_system');
    if(!empty($_SESSION['login'])){
    $select_app = "SELECT * FROM student_details WHERE accept = 'false'"; 
    // $select_app = "SELECT * FROM student_details where 'accept' == 'true'";
    $select_app_query = mysqli_query($conn,$select_app);
    $applications = mysqli_fetch_all($select_app_query,MYSQLI_ASSOC);
    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
         <div class="row">
            <div class="col-lg-12">
            <table class="table">
            <thead>
                <th>Student Id</th>
                <th>Student First_Name</th>
                <th>Student Email</th>
                <th>Student Mobile</th>
                <th>Student Gender</th>
                <th>Student DOB</th>
                <th>Student Address</th>
                <th>Student Nationality</th>
                <th>Student City</th>
                <th>Student Postal</th>
                <th>Student Dept</th>
                <th>Student Shift</th>
                <th>Student Season</th>
                <th>Actions</th>
            </thead>

            <tbody>
               <tr>
                <?php foreach($applications as $application){?>

                <td><?php echo $application['ID'] ?></td>
                <td><?php echo $application['First_Name'] ?></td>
                <td><?php echo $application['Email'] ?></td>
                <td><?php echo $application['Mobile'] ?></td>
                <td><?php echo $application['Gender'] ?></td>
                <td><?php echo $application['Date_of_Birth'] ?></td>
                <td><?php echo $application['Address'] ?></td>
                <td><?php echo $application['Nationality'] ?></td>
                <td><?php echo $application['City'] ?></td>
                <td><?php echo $application['Postal'] ?></td>
                <td><?php echo $application['Department'] ?></td>
                <td><?php echo $application['Shift'] ?></td>
                <td><?php echo $application['Season'] ?></td>
                <td>
                    <a href="accept.php/?id=<?php echo $application['ID'] ?>">Accept</a>
                    <a href="">Decline</a>
                </td>   
              
                </tr>
                <?php
                } ?>
                
            </tbody>
           </table>
            </div>
         </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


<?php
}

?>




 