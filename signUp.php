<?php

$showAlert = false;
$showError = false;
$exists=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';

    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirmpassword"];


    $sql = "Select * from registrationtable where Username='$username'";
    // print($sql);

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if ($num == 0) {
        if (($password == $cpassword) && $exists==false) {
            $hash = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // Password Hashing is used here.
            $sql = "INSERT INTO `registrationtable` ( `Username`,`Email`, `MobileNumber`, `Password`) VALUES ('$username','$email', '$mobileNumber', '$hash')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    }// end if

    if ($num>0) {
        $exists="Username not available";
    }
}//end if

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
    <div style="margin-top: 40px; margin-left: 520px;">
        <span style="font-family: 'Kalam'; font-size: 40px; line-height: 50px; color: #77920D;">New Account</span><br>
    </div>
    <div>
    <form class="container" action="signUp.php" method="post">
        <div style="margin-left: 400px; margin-top: 10px">
        <input type="text" placeholder="Username" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="username"><br><br>
        <input type="email" placeholder="Email" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="email"><br><br>
        <input type="number" placeholder="Mobile Number" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="mobileNumber"><br><br>
        <input type="password" placeholder="Create New Password" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="password"><br><br>
        <input type="password" placeholder="Re-Enter the Password" style="border-radius: 15px; height: 50px; border: 2px solid #77920D;" name="confirmpassword"><br><br>
        <button type="submit" style="border-radius: 15px; height: 50px; width: 270px; background: #77920D; color: white; font-size: 20px;" id="button">Create Account</button><br><br>
        <a href="clientLogin.php" style="color:#77920D; margin-left: 50px;">Already have Account?</a>
      </form>
    </div>
</body>
</html>