<?php
include"connection.php";
session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="frontpage/css/style.css" />
  </head>
  <body>
    <!-- top banner -->
    <div class="container-fluid">
      <div class="row top-banner p-2">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="row">
            <div class="col-lg-2 col-sm-6 col-md-4">
              <div class="logo">
                <img src="frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
              </div>
            </div>
            <div class="col-sm-8">
              <div class="top-title">
                <h1>BUDHANILKANTHA TECHNICAL SCHOOL</h1>
              </div>

              <div class="top-subtitle">
                <h5>A BETTER LEARNING FUTURE STARTS</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="quick-contact">
            <ul>
              <li><i class="fa fa-phone"></i>&nbsp;01-4372300</li>
              <li><i class="fa fa-envelope"></i>bnktechschool@gmail.com</li>
              <li>
                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;Budhanilkantha-3,
                Kathmandu, Nepal
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- navbar -->
    <?php
      if(isset($_SESSION['login_user'])){
      ?>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light py-0 ">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <!--<li class="nav-item center-menu">
              <a class="nav-link " href="../index.php">School</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../engineering/index.php">Engineering</a>
            </li>-->
            <li class="nav-item center-menu">
              <a class="nav-link" href="galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="./events/events.php">Events</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="./resources/resources.php">Resources</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="./ourteam/ourteam.php">Our Team</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="./results/results.php">Results</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              
              
              <li class="nav-item">
                <a class="nav-link right-link" href="student/profile.php"><?php echo "$_SESSION[login_user]";?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link right-link" href="login/logout.php">Logout</a>
              </li>
            
            </ul>
          </form>
        </div>
      </nav>
    </div>
<?php }else{
  ?>
  <div>
      <nav class="navbar navbar-expand-lg navbar-light py-0 ">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item center-menu">
              <a class="nav-link " href="../index.php">School</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link active" href="../index.php">+2</a>
            </li>
             <li class="nav-item center-menu">
              <a class="nav-link" href="../engineering/index.php">Engineering</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="galary/gallery.php">Gallery</a>
            </li>
            <li class="nav-item center-menu">
              <a class="nav-link" href="events/events.php">Events</a>
            </li>
            
            <li class="nav-item center-menu">
              <a class="nav-link" href="ourteam/ourteam.php">Our Team</a>
            </li>
             
            <li class="nav-item center-menu">
              <a class="nav-link" href="contact/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-5" >
              <li class="nav-item dropdown" >
                <a class="nav-link right-link dropdown-toggle"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false" >Login</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login/login.php">Student</a>
                <a class="dropdown-item" href="login/teacherlogin.php">Teacher</a>
                
              </div>
              </li>
            </ul>
          </form>
        </div>
      </nav>
    </div>
  <?php
}?>

    <!-- home image -->
    <div class="row p-0">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div>
          <img src="frontpage/images/banner-img.jpg" class="img-fluid" alt="Not Available!" />
        </div>
      </div>
    </div>

    <!-- announcement section -->
    <div class="container-fluid">
      <div class="row announcement pt-5">
        <div class="col-lg-4 ">
          <ul class="nav flex-column" style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NEWS AND ANNOUNCEMENT</a>
            </li>
             <?php 

                        
                      include("connection.php");
                       
                         
                                              
                      $sql="select *from news_and_event WHERE plus2=1 ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>



            <li class="nav-item">
              <a class="nav-link" href="#"
                ><i class="fa fa-circle"></i><?php echo $row['post']; ?></a
              >
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="#"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="nav flex-column"  style="margin-bottom: 15px;">
            <li class="nav-item">
              <a class="nav-link active" href="#">NOTICE BOARD</a>
            </li>
            <?php                  
                      $sql="select *from notice WHERE plus2=1 ORDER BY id DESC LIMIT 5";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>

            <li class="nav-item">
              <a class="nav-link" href="#"
                ><i class="fa fa-circle"></i></i><?php echo $row['notice']; ?></a
              >
            </li>
           <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="#"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
          </ul>
        </div>
        <div class="col-lg-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">CALENDAR EVENTS</a>
            </li>
            <?php                  
                      $sql="select *from calender WHERE plus2=1 ORDER BY id DESC LIMIT 2";
                      $query=mysqli_query($db,$sql);
                      while($row=mysqli_fetch_array($query))
                        {
              ?>


            <li class="nav-item">
              <a class="nav-link" href="#"><p class="date-marker" style="width:90%; height: 60px; margin-top: 7px;"><?php echo $row['date']; ?><br />><?php echo $row['event']; ?></p>
              </a>
            </li>
          <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="#"
                ><button type="button" class="btn btn-success">
                  View More
                </button></a
              >
            </li>
           
          </ul>
        </div>
      </div>
    </div>

    <!-- about us banner -->
    <div class="row p-0">
      <div class="col-lg-12">
        <div class="about-img">
          <img src="frontpage/images/banner-img.jpg" alt="Not Available!" />
          <div class="title">
            <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link right-link" href="./description/description.php"><h1>ABOUT US</h1></a>
              </li>
            </ul>
          </form>
          </div>
        </div>
      </div>
    </div>

    <!-- message section -->
    <div class="container-fluid">
      <div class="row message p-5">
        <div class="col-lg-6 col-sm-12 col-md-6" >
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>INTRODUCTION</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam cumque eligendi eum asperiores voluptas magnam. Pariatur,
              recusandae! Lorem ipsum dolor sit amet consectetur, adipisicing
              elit. Asperiores nobis magni cupiditate unde aliquid modi quas
              aperiam quod eligendi, beatae tempore corporis laborum
              exercitationem nesciunt repellendus ipsam. Cupiditate incidunt, ad
              alias quaerat labore asperiores hic nobis quidem excepturi
              assumenda saepe itaque consequuntur vel quibusdam? Fugiat expedita
              beatae sapiente atque sint.<br />
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni
              tenetur enim, nobis natus sunt vitae culpa, quae earum obcaecati
              magnam perferendis veniam fuga molestias maiores.
            </p>
            <button type="button" class="btn btn-success">View More</button>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6">
          <div class="introduction"  style="margin-bottom: 20px;">
            <h4>MESSAGE FROM THE CHIEF</h4>
            <div class="chief-img">
              <img src="frontpage/images/founder.jpg" alt="Not Available!" />
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit ad saepe facilis doloremque. Id asperiores nam
              incidunt, ipsum minima suscipit magnam, repudiandae vitae at
              deleniti cupiditate dicta! Quos nobis sed, recusandae, aut
              perferendis a molestias omnis iste repellat commodi error harum
              aliquam csuids xnxsaw witye hdhe repeltu hu powioer heui Lorem
              ipsum dolor sit amet Lorem ipsum dolor sit amet.
            </p>
            <button type="button" class="btn btn-success">View More</button>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="container-fluid">
      <div class="row bottom-section p-5 pb-0">
        <div class="col-sm-12">
          <div class="bottom-title">
            <h5>BUDHANILKANTHA TECHNICAL SCHOOL</h5>
          </div>
        </div>
      </div>

      <div class="row bottom-section pl-5 pr-5">
        <div class="col-lg-3">
          <span>Address</span><br />Budhanilkantha-3, Kathmandu, Nepal
        </div>
        <div class="col-lg-3"><span>TEL NO.</span><br />01-4372300</div>
        <div class="col-lg-3">
          <span>EMAIL</span><br />bnktechschool@gmail.com
        </div>
        <div class="col-lg-3"><span>WEBSITE</span><br />www.bts.com</div>
      </div>

      <div class="row bottom-section p-5 pb-0">
        <div class="col-sm-12">
          <div class="bottom-title">
            <h5>STAY IN TOUCH</h5>
          </div>
          <div class="social-media">
            <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row bottom-section">
        <div class="col-sm-12">
          <div class="bottom-title">
            <h5>&copy; All rights reserved Budhanilkantha Technical School</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- js setup -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
