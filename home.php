<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet"> 
    <style>
        .verticalImage {
        display: flex;
        align-items: center;
      }
    .text {
        font-size: 20px;
        padding-left: 100px;
      }
      .image {
        flex-basis: 40%
      }
      .bottom-right {
      position: absolute;
      bottom: 5px;
      right: 290px;
      }
    </style>
</head>
<body>

  <!--HEADER-->
    <div style="font-family: 'Kalam'; font-size: 40px; line-height: 50px; color: #77920D;">RentUs</div>
    <nav class="navbar navbar-expand-lg" style="background-color: black; height: 80px;">
        <div>
          <ul class="navbar-nav" style="text-align: center;">
            <li>
                <a href="#" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 30px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Home</a>
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
            <li>
                <a href="clientLogin.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 470px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Login</a>
            </li>
            <li>
                <a href="signUp.php" style="color: #77920D; font-weight: bold; font-family: Inter; margin-left: 30px; padding-right: -15px; text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Register</a>
            </li>
          </ul>
        </div>  
      </nav>

<!--COVER PAGE-->
<div id="carouselExampleSlidesOnly" class="carousel slide container" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="coverPage.png" alt="First slide">
    </div>
  </div>
</div>

<!--OPTIONS ON COVER PAGE-->
<div class="card-group container bottom-right" style="width: 50rem;">
  <div class="card" style="background-color: black; width: 18rem;">
    <div class="card-body">
      <h5 class="card-title text-uppercase" style="color: #77920D;">Location</h5>
      <p class="card-text" style="color: #77920D;">Search your location</p>
    </div>
  </div>
  <div class="card" width="15rem" style="background-color: black;">
    <div class="card-body">
      <h5 class="card-title text-uppercase" style="color: #77920D;">Pickup Date</h5>
      <p class="card-text" style="color: #77920D;">Tue, 5 Dec, 10:00 a.m</p>
      <button style="background-color: #77920D; border-radius: 8px; height: 35px; color: #FFFFFF; border: none; width: 150px;"><a onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Search</a></button>
    </div>
  </div>
  <div class="card" width="15rem" style="background-color: black;">
    <div class="card-body">
      <h5 class="card-title text-uppercase" style="color: #77920D;">Return Date</h5>
      <p class="card-text" style="color: #77920D;">Fri, 16 Dec, 5:00 p.m</p>
    </div>
  </div>
</div>


<!--HOW IT WORKS?-->
      <div class="container">
        <br><span style ="font-family: 'Kalam'; font-size: 30px; line-height: 50px; color: #77920D; padding-left: 450px;">How it Works?</span><br>
        <span style="font-family: 'Inter'; font-size: 25px; line-height: 50px; color: #77920D; padding-left: 300px;">Now rent the vehicle in 3 easy steps:</span><br><br>
        <div class="card-group" style="margin-left: 50px">
            <div style="width: 20rem;">
              <center><img src="location.jpeg" alt="Card image cap"></center>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center; color: #77920D;">Choose location</h5>
                <p class="card-text" style="color: #77920D;">Choose your vehicle and we will suggest you the best vehicle available according to your location</p>
              </div>
            </div>
            <div style="width: 20rem; margin-top: -10px; margin-left: 30px;">
              <center><img src="pickupdate.jpeg" alt="Card image cap"></center>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center; color: #77920D;">Pick-Up Date</h5>
                <p class="card-text" style="color: #77920D;">Select your pick-up date and time to book your vehicle</p>
              </div>
            </div>
            <div style="width: 20rem; margin-top: -7px; margin-left: 30px;">
              <center><img src="bookvehcile.jpeg" alt="Card image cap"></center>
              <div class="card-body">
                <h5 class="card-title" style="text-align: center; color: #77920D;">Book Your Vehicle</h5>
                <p class="card-text" style="color: #77920D;">Book your vehicle and enjoy your trip. We ensure that you will have the great experience.</p>
              </div>
            </div>
          </div><br><br>
      </div>


<!--WHY CHOOSE US-->
<div class="container">
  <div>
    <img src="img1.jpeg" style="float: left; width: 38%">
    <div style="margin-left: 50%">
      <br><br><p style="font-family: 'Kalam'; font-size: 30px; color: #77920D;"> Why Choose us?</p>
      <p style="font-family: 'Inter'; font-size: 18px; color: #77920D;">We offer the best experience with our rental deals.</p>
      <p style="font-weight: bold; font-family: 'Inter'; font-size: 20px; color: #77920D;">&#8594; Best price gauranteed</p>
      <p style="font-family: 'Inter'; font-size: 16px; color: #77920D; margin-left: 25px;">Find a lower price? We will refund you the 100% of the difference</p>
    </div>
    <img src="img2.jpeg" style="float: left; width: 38%;">
    <div style="margin-left: 50%">
      <p style="font-weight: bold; font-family: 'Inter'; font-size: 20px; color: #77920D;">&#8594; Experienced Driver</p>
      <p style="font-family: 'Inter'; font-size: 16px; color: #77920D; margin-left: 25px;">Don't have a driver? Don't worry, we have many experienced driver for you to make your trip more easy!</p>
      <p style="font-weight: bold; font-family: 'Inter'; font-size: 18px; color: #77920D;">&#8594; 24 hour vehicle delivery</p>
      <p style="font-family: 'Inter'; font-size: 16px; color: #77920D; margin-left: 25px;">There is no time restrictions. Book your vehicle at any time and enjoy our services.  </p>
    </div><br>
    <img src="img3.jpeg" style="float: left; width: 38%; height: 200px;">
      <div style="margin-left: 50%">
        <p style="font-weight: bold; font-family: 'Inter'; font-size: 18px; color: #77920D;">&#8594; 24/7 Technical support</p>
        <p style="font-family: 'Inter'; font-size: 18px; color: #77920D; margin-left: 25px;">Have a question? We are available for you. Contact us anytime.</p>
      </div><br>
  </div><br><br><br><br>
</div>

<!--RENT YOUR VEHICLE-->
<div class="container">
  <span style ="font-family: 'Kalam'; font-size: 30px; line-height: 50px; color: #77920D; padding-left: 450px;">Rent your vehicle</span><br><br>
  <div class="card-group" style="margin-left: 50px;;">
      <div style="width: 20rem; background-color: black; border-radius: 15px;">
        <br><center><img src="car.jpeg" alt="Card image cap" height="100px"></center>
        <div class="card-body">
          <br><p class="card-text" style="color: #77920D;">&emsp;No of persons &emsp;&emsp;&emsp;&emsp;Pick-up Location</p>
          <p class="card-text" style="color: #77920D;">&emsp;Types of Vehicle &emsp;&emsp;&emsp;Pick-up date</p>
          <p class="card-text" style="color: #77920D;">&emsp;Driver Requirement &emsp;&nbsp;&nbsp;Pick-up time</p>
          <div class="card-footer">
            <hr style="border-radius: 2px; border: 2px solid #77920D;">
           <p style="color: #77920D; padding-left: 18px;"> Rs. 3000/Day<button style="margin-left: 75px; background-color: #77920D; border-radius: 8px; height: 45px; color: white; border: none;">Rent Now &#8594</button></p>>
          </div>
        </div>
      </div>
      <div style="width: 20rem; margin-left: 30px; background-color: black; border-radius: 15px;">
        <br><center><img src="cycle.jpeg" alt="Card image cap" height="100px"></center>
        <div class="card-body">
          <br><p class="card-text" style="color: #77920D;">&emsp;No of persons &emsp;&emsp;&emsp;&emsp;Pick-up Location</p>
          <p class="card-text" style="color: #77920D;">&emsp;Types of Vehicle &emsp;&emsp;&emsp;Pick-up date</p>
          <p class="card-text" style="color: #77920D;">&emsp;Driver Requirement &emsp;&nbsp;&nbsp;Pick-up time</p>
          <div class="card-footer">
            <hr style="border-radius: 2px; border: 2px solid #77920D;">
           <p style="color: #77920D; padding-left: 18px;"> Rs. 1500/Day<button style="margin-left: 75px; background-color: #77920D; border-radius: 8px; height: 45px; color: white; border: none;">Rent Now &#8594</button></p>>
          </div>
        </div>
      </div>
      <div style="width: 20rem; margin-left: 30px; background-color: black; border-radius: 15px;">
        <br><center><img src="motorbike.jpeg" alt="Card image cap" height="100px"></center>
        <div class="card-body">
          <br><p class="card-text" style="color: #77920D;">&emsp;No of persons &emsp;&emsp;&emsp;&emsp;Pick-up Location</p>
          <p class="card-text" style="color: #77920D;">&emsp;Types of Vehicle &emsp;&emsp;&emsp;Pick-up date</p>
          <p class="card-text" style="color: #77920D;">&emsp;Driver Requirement &emsp;&nbsp;&nbsp;Pick-up time</p>
          <div class="card-footer">
            <hr style="border-radius: 2px; border: 2px solid #77920D;">
           <p style="color: #77920D; padding-left: 18px;"> Rs. 500/Day<button style="margin-left: 75px; background-color: #77920D; border-radius: 8px; height: 45px; color: white; border: none;">Rent Now &#8594</button></p>>
          </div>
        </div>
      </div>
    </div><br>

<!--SHOW ALL VEHICLES BUTTON-->
<div class="container">
  <center><button style="margin-left: 10px; background-color: #000000; border-radius: 8px; height: 45px; color: #77920D; border: none; width: 320px;"><a onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Show All Vehicles &#8594</a></button></center>
</div><br>

<!--FOOTER-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <img src="socialMedia.jpeg" height="30px" width="150px">
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section style="background-color: black;"><br>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6>
            <i style="font-family: 'Kalam'; font-size: 40px; line-height: 50px; color: #77920D;">RentUs</i><br><br>
            <i></i>
          </h6>
          <p style="color: white;">
            25566 Hc 1, Glennallen,<br>Alaska,<br>99588, USA<br><br>7864593847
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 style="color: white" class="text-uppercase">
            Our Products
          </h6>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Career</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Vehicles</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Packages</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Features</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Priceline</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 style="color: white" class="text-uppercase">
            Useful links
          </h6>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Download</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Help Center</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Guides</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Partner Network</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Developer</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 style="color: white" class="text-uppercase">About RentUs</h6>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Why Choose RentUs</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Our Story</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Investor Relations</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Press Center</a>
          </p>
          <p>
            <a href="#!" style="color: #77920D;   text-decoration: none;" onmouseover="this.style.color= '#FFFFFF'" onmouseout="this.style.color= '#77920D'">Advertise</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <!-- Copyright -->
</footer>
</div>
</body>
</html>