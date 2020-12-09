<?php
   session_start();

  include('include/connection.php');
   if(isset($_POST['NewsAndEventSubmit']))
   {
      $post= $_POST['title'];
      $date = $_POST['date'];
   	  $NewsAndEvent=$_POST['NewsAndEvent'];
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



   	  $sql="insert into news_and_event (post,description,date,school,plus2,engineering) values('$post','$NewsAndEvent','$date',$school,$plus2,$engineering) ";
   	   

   	  if(mysqli_query($db,$sql))
   	  {
   	  	$_SESSION['success']='Event and post has been successfully posted';
   	  	 	
   	  	header('location:news_&_event.php');
   	 
   	  }
   	  else
   	   {
   	  	$_SESSION['success']='!Opps somthing wrong in posting event and news';
   	    	  	header('location:news_&_event.php');
   	 

   	  }
   	  


   }



?>