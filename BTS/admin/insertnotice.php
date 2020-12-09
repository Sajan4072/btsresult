<?php
   session_start();

  include('include/connection.php');
   if(isset($_POST['submit']))
   {

      $notice=$_POST['notice'];
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



      $sql="insert into notice (notice,school,plus2,engineering) values('$notice',$school,$plus2,$engineering) ";
       

      if(mysqli_query($db,$sql))
      {
        $_SESSION['success']='Event and post has been successfully posted';
          
        header('location:notices.php');
     
      }
      else
       {
        $_SESSION['success']='!Opps somthing wrong in posting event and news';
              header('location:notices.php');
     

      }
      


   }



?>