<!DOCTYPE html>
<html>
<head>
  <title>BTS</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="frontpage/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontpage/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../frontpage/css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Registration.css">
</head>
<body>

<?php  
// define variables to empty values 
include "../../connection.php"; 
$fnameErr = $lnameErr = $addressErr = $passwordErr = $emailErr = $phoneErr = "";  
$fname = $lname = $address = $phone =  $password = $image = $email= "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["fname"])) {  
         $fnameErr = "Name is required";  
    } else {  
        $fname = input_data($_POST["fname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                $fnameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["lname"])) {  
            $lnameErr = "Last name  is required";  
    } else {  
            $lname = input_data($_POST["lname"]);  
            // check that the e-mail address is well-formed  
           if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {   
                $lnameErr = "Only alphabets and white space are allowed";  
            }  
     }  
    if (empty($_POST["address"])) {  
            $addressErr = "Address is required";  
    } else {  
            $address = input_data($_POST["address"]);  
            // check that the e-mail address is well-formed  
           if (!preg_match("/^[a-zA-Z0-9 -_:,]*$/",$address)) {   
                $addressErr = "Only alphabets, number and white space are allowed";  
            }  
     }  
      
     
    if (empty($_POST["phone"])) {  
        $phoneErr = " Parent's name is required";  
    } else {  
            $phone = input_data($_POST["phone"]);  
            // check if URL address syntax is valid  
            if (!preg_match("/^[0-9]*$/",$phone) && strlen ($phone) != 10) {
                $phoneErr = "Only 10 digits are allowed";  
            }      
    }  

     if (empty($_POST["password"])) {  
        $passwordErr = "Enter the Password";  
    } else {
        $password = input_data($_POST["password"]);  
       $uppercase = preg_match('@[A-Z]@', $password);
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);
       

if(!$uppercase || !$lowercase || !$number ||  strlen($password) < 8)   
            
         {
                $passwordErr = "Invalid Password";  
            }      
    }  




if (empty($_POST["email"])) {  
        $emailErr = " What is your email";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check if URL address syntax is valid  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               
                $emailErr = "Enter valid email";  
            }      
    } 
  }

function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  




  <div class="container">
        <div class="row formtitle">
            <h5>STUDENT REGISTRATION FORM</h5>
        </div>
        <div class="row form body">
            <div class="col-lg-7 col-md-12 col-sm-12 bodycol">
 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" >    
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">FIRST NAME</label>  
    <input type="text" name="fname" class="form-control" id="inputName" placeholder="Name" autocomplete="off">  
    <span class="error"><?php echo $fnameErr; ?> </span>  
      </div>
   <div class="form-group col-md-6">
      <label for="inputName">LAST NAME</label>  
    <input type="text" name="lname" class="form-control" id="inputName" placeholder="Last Name" autocomplete="off">  
    <span class="error"><?php echo $lnameErr; ?> </span>  
    </div>  
</div>
<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail">ADDRESS</label>   
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address" autocomplete="off">  
    <span class="error"><?php echo $addressErr; ?> </span>  
    </div> 
   

    
    
    <div class="form-group col-md-6">
      <label for="inputEmail">CONTACT NUMBER</label>
    <input type="text" name= "phone" class="form-control" id="inputFathername" placeholder=" Enter phone number" autocomplete="off">  
    <span class="error"><?php echo $phoneErr; ?> </span>  
    </div>

    <div class="form-group col-md-6">
      <label for="image">TEACHER'S PHOTO</label>
      <input  class="form-control" type="file" name="image" placeholder = "Student's image">
</div>

<div class="form-group col-md-12">
      <label for="inputEmail">EMAIL</label>
    <input type="email" name="email" class="form-control" id="inputFathername" placeholder=" Email ID" autocomplete="off">  
    <span class="error"><?php echo $emailErr; ?> </span>  
    </div>


<div class="form-group col-md-12">
      <label for="inputEmail">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="inputEmail" placeholder=" Password" autocomplete="off">  
    <span class="error"><?php echo $passwordErr; ?> </span>  
    </div>
</div>

        
        <div class="form-row">
    <div class="form-group col-md-12" style="text-align: center;">                       
    <input type="submit" name="submit" value="REGISTER" class="btn btn-primary" style="background-color: #224a8f; border: none;">   
    </div></div>                             
</form>  
  </div>
  <div class="col-lg-5 col-md-12 col-sm-12 textcol" style="background-color: #224a8f; opacity: 60%; padding-top: 100px; text-align: center; color: white;">
                <h1>WELCOME</h1>
                <h4 style="padding-top: 50px;">REGISTER TO<br> CONTINUE ACCESS<br> PAGE</h4>
            </div>

            
        </div>
    </div>
</body>
 



<script src="script.js"></script>



<script src="https://kit.fontawesome.com/302b58d09d.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html> 

<?php  


    if(isset($_POST['submit'])) {  
    
       $count=0;

       $image=$_FILES['image']['name'];
  

       $temp=$_FILES['image']['tmp_name'];
  
       $dir="../teacher/photos/".$image;
  
       move_uploaded_file($temp, $dir);

        $sql="SELECT email from `college_teacher`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['email']==$email)
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          if($fnameErr == "" && $lnameErr == "" && $addressErr == ""  && $passwordErr == "" && $phoneErr =="" && $emailErr == "" ) {
        
    mysqli_query($db,"INSERT INTO college_teacher(firstname,lastname,address,phone,password,email,image) VALUES('$fname', '$lname', '$address','$phone', '$password','$email','$image');"); 
    

  ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">

    <h1>REGISTERED SUCCESSFULLY!!!</h1>
  </div>
  
        

 
  <?php 
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }  
    } 
    else{
      echo" already reistered";
    } 
  }
?>  
  




