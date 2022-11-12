<?php
include 'dbconnect.php';
$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from admintable where Username = '$username' and Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo '<script>alert("Welcome Admin")</script>';
    } else {
        echo '<script>alert("Login failed. Invalid username or password.")</script>';
    }
}
?>  


<!--HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet"> 
</head>
<body>
    <!--HEADER-->
    <div style="font-family: 'Kalam'; font-size: 40px; line-height: 50px; color: #77920D;">RentUs</div>
    <nav class="navbar navbar-expand-lg" style="background-color: black; height: 80px;">
        <div>
          <ul class="navbar-nav" style="text-align: center;">
            <li>
                <a href="home.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 30px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Home</a>
            </li>
            <li>
                <a href="aboutUs.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 60px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">About Us</a>
            </li>
            <li>
                <a href="FAQs.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 60px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">FAQs</a>
            </li>
            <li>
                <a href="contactUs.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 60px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Contact Us</a>
            </li>
            <li>
                <a href="rentCars.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 60px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Rent Cars</a>
            </li>
          </ul>
        </div>  
        </nav>
        

    <div style="margin-top: 50px; margin-left: 520px;">
        <span style="font-family: 'Kalam'; font-size: 40px; line-height: 50px; color: #77920D;">Admin Login</span><br>
    </div>
    <div>
    <form class="container" action="adminLogin.php" method="post">
        <div style="margin-left: 400px; margin-top: 10px">
        <input type="text" placeholder="Username or Email" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="username"><br><br>
        <input type="password" placeholder="Password" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="password"><br><br>
        <button type="submit" style="border-radius: 15px; height: 50px; width: 270px; background: #77920D; color: white; font-size: 20px;">Login</button><br><br>
        <a href="#" style="margin-left: 80px; color: #77920D;">Forgot Password?</a>
      </form>
    </div>
    </div>
</body>
</html>