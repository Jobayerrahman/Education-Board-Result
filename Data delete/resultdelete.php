<?php
    $con = new mysqli("localhost","root","","ebr");
 
    session_start();

     if(isset($_GET['stuid']))
     {
         $student_id = $_GET['stuid'];

         $sql = "DELETE FROM studentresult WHERE res_serial_id = '$student_id'";
         $data = $con->query($sql);

         if($data == true)
         {
             header("Location: ../Data view/Resultview.php");
         }
         else
         {
             echo "Data not delete";
         }
     }
?>