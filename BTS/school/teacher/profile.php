<?php
include "include/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS</title>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="../../frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../frontpage/css/style.css" />
  </head>
  <body>
    

    <div class="container-fluid">
      <div class="row top-banner p-2">
        <div class="col-lg-2 col-md-2 col-12">
           <div class="logo">
                <img src="../teacher/frontpage/images/logo.jpg" style="margin-top: 20px;" alt="Not Available!" />
              </div>
        </div>
                <div class="col-lg-8 col-md-8 col-12">
                   <div class="top-title">
                <h1>BUDHANILKANTHA TECHNICAL SCHOOL</h1>
              </div>

              <div class="top-subtitle">
                <h5>A BETTER LEARNING FUTURE STARTS</h5>
              </div>  
                </div>
                        <div class="col-lg-2 col-md-2 col-12">
                          <div class="row" style="margin-top: 60px; margin-right: 2px;">
                            <div class="col-6"><h5><a href="teacherlanding.php" style="text-decoration: none; color: black;">HOME</a></h5></div>
                            
                            <div class="col-6">
                              <a href="logout.php"> <button type="submit" class="btn btn-primary" style="background-color: #224a8f; border: none; float: left; border-radius: 20px;">LOGOUT</button></a>
                            </div>
                          </div>
                           
                        </div>
      </div>
    </div>

    

    <!-- about us banner -->
    <div class="row justify-content-center">
      <div class="col-lg-6">
        
          
      <h3 style="text-align: center; color: #6AAC6F">Welcome <?php echo $_SESSION['login_user'];?></h3>
        <?php 
 $query = ("SELECT * FROM school_teacher WHERE firstname='" . $_SESSION["login_user"] ."'");
  $result1 = mysqli_query($db, $query);
  $row = mysqli_fetch_assoc($result1);
?>
<div class="text-center">
  
   <img src="../photos/<?php echo $row['image']; ?>" alt="" class="rounded" id="myImg" style=" width: 250px; height: 250px; " /> 
</div>
 <table class="table table-bordered">
  <tbody>
    <style type="text/css">
      tr th,td{
        text-align: center;
      }
    </style>
    <tr>
      
      <th scope="col">First Name</th>
      <td scope="col"><?php echo $row['firstname'];?></td>
      
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <td scope="col"><?php echo $row['lastname'];?></td>
    </tr>
    <tr>
      <th scope="col">Address</th>
      <td scope="col"><?php echo $row['address'];?></td>
    </tr>
    <tr>
      <th scope="col">Phone No</th>
      <td scope="col"><?php echo $row['phone'];?></td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td scope="col"><?php echo $row['email'];?></td>
    </tr>
    <tr>
      <th scope="col">Password</th>
      <td scope="col"><?php echo $row['password'];?></td>
    </tr>
    
  </tbody>
</table>
        
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
