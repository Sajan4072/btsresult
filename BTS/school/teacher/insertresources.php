<?php
session_start();
include('include/connection.php');
	
 if(isset($_POST['submit']))
   {
   	
	
	

	 
	 $fileName=$_FILES['csv']['name'];
	

	 $fileTmpName=$_FILES['csv']['tmp_name'];


	 $fileExtension=pathinfo($fileName,PATHINFO_EXTENSION);
		
	 $allowedType=array('csv');
	 if (!in_array($fileExtension,$allowedType))
	 {
	 	?>
	 	<div class="alert alert-danger">
	 		Inavalid File extension 
	 	</div> 
	 	<?php
	 }
	else{
		$handle=fopen($fileTmpName,'r');
		while(($myData=fgetcsv($handle,1000,','))!==FALSE)
		  {
			$uniquecode=$myData[0];
			$roll=$myData[1];
			$sub=$myData[2];
			$marks=$myData[3];
			$term=$mydata[4];
			$class=$mydata[5];

			$sql1="insert into school_result (uniquecode,roll,subject,marks,term,class) values('".$uniquecode."','".$roll."','".$sub."','".$marks."','".$term."','".$class."')";
			$query1=mysqli_query($db,$sql1);
;
			
		  }
		if(!$query1){
			die("error in uploading".mysql_error());

		            }
		else{?>
			<div class="alert alert-succesfully">
				file uploaded
			</div><?php

		    }
		}

	


	// $sql="insert into school_result(class,term)
	//     values('$class','$term')";
	// $query=mysqli_query($db,$sql);
  	   
 //     $_SESSION['message']="POSTED";
	
 }


?>



