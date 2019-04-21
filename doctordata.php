<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"></head>
<body>
    <header class="header">
        <div class="grid-3 showbizz">
        <div class="logo">
            <div class="heading">
            <a href="welcome.html">Dochat</a>
            </div>
            <div class="sub">
                Doctor . Disease . B.M.I
            </div>
        </div>
        <div class="nmae">
        <a href="doctor.php">Doctor</a>
        </div>
    </div>
        <nav class="nav grid-3 center pad0">
            <div class="font center linker">
            <a href="disease.php">Disease</a>
            </div>
            <div class=" font center linker">
            <a href='bmicalulatormain.html'>B.M.I</a>
            </div>
            <div class="left_border padadj">
                <form action="searchrel.php" method="POST" >
                    <input type="text" name="District" id="District" placeholder="Search District">
                    <input type="submit" value="search" id="mbutton">
                </form>
            </div>
        </nav>
    </header>
    <section class='datsec'>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="project";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed".$conn->connect_error);

        }
        
        $sql="SELECT * FROM doctor ";
        if($conn->query($sql))
        {
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo "<div id='name' class='center'>".$row["Name"]."</div>";
                     echo "<p> D_id&nbsp&nbsp:&nbsp&nbsp".$row["D_id"]."</p>";
                    echo "<p>Consultant Fee&nbsp&nbsp:&nbsp&nbsp".$row["Consultant Fee"]."</p>";
                    echo "<p> Specialization&nbsp&nbsp:&nbsp&nbsp".$row["Specialization"]."</p>";
                    echo "<p>Pincode&nbsp&nbsp:&nbsp&nbsp".$row["Pincode"]."</p>";
                    echo "<p>Clinc&nbsp&nbsp:&nbsp&nbsp".$row["Clinc"]."</p>";
                    echo "<p>District&nbsp&nbsp:&nbsp&nbsp".$row["District"]."</p>";
                }
            }
            else{
                echo "<div class='error center'><p>Oops!</p><p>No Data Found!</p>";
                echo "<p>Check if entered string is correct</p></div>";
            }
        }
        
    ?>
    </section>
    <section class="about">
        <div class="container grid-2 center">
            <div class="center about1">
            <a href="about.html" class="about123"><i class="fas fa-users fa-2x"></i>
                <h3 class="aboutus">About Us</h3></a>
            </div>
            <div class="left_border" >
                <div class="contact">
                <i class="fab fa-youtube fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
                <i class="fas fa-envelope fa-2x"></i>
            </div>
            <h3>Contact Us</h3>
            </div>
    
        </div>
    </section>
    <footer class="footer center">
        <p>Showbizz Media &copy; 2018 </p>
    </footer>
</body>
</html>