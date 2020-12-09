<?php
session_start();
include('include/connection.php');
	
  if(isset($_POST['submit']))
   {
   	
	 if($_POST['school']=='Yes'){
         $school=1;
        }
        else{
         $school=0;
        }
     if($_POST['plus2']=='Yes'){
         $plus2=1;
        }
        else{
         $plus2=0;
        }
     if($_POST['engineering']=='Yes'){
         $engineering=1;
        }
        else{
         $engineering=0;
        }

	$caption=$_POST['caption'];
	

	 
	 $image=$_FILES['image']['name'];
	

	 $temp=$_FILES['image']['tmp_name'];
	
	 $dir="photo/".$image;
	
	 move_uploaded_file($temp, $dir);

	
	 

	 $sql="insert into photos(caption,photo,school,plus2,engineering)
	    values('$caption','$image',$school,$plus2,$engineering)";
	    $query=mysqli_query($db,$sql);
	   
$_SESSION['message']="POSTED";
	
 }


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>EATGITA</title>
</head>
<body>
	<?php

	if(isset($_SESSION['message'])):


	?>
	<div class="alert alert-success">

		<?php
		echo $_SESSION['message'];

		?>
	</div>
	<?php endif ?>

</body>
</html>




