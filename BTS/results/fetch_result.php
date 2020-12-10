<?php 

  include("../admin/include/connection.php");
$class=$_GET['class'];
$code=$_GET['uniquecode'];
$term=$_GET['term'];




   $sql="select *from school_result where uniquecode='$code' AND class='$class'  AND term='$term' " ;
    
   $result=mysqli_query($db,$sql);
   $fetch_result=array();
 $res=mysqli_fetch_array($result);
   while($row=mysqli_fetch_array($result))
  {
      $fetch_result[]=$row;
  }

 echo json_encode($fetch_result);


?>