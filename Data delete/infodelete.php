<?php
    $con = new mysqli("localhost","root","","ebr");
 
    session_start();

     if(isset($_GET['stuid']))
     {
         $student_id = $_GET['stuid'];

         $sql = "DELETE FROM studentinfo WHERE stu_serial_num = '$student_id'";
         $data = $con->query($sql);

         if($data == true)
         {
             header("Location: ../Data view/Studentinfo.php");
         }
         else
         {
             echo "Data not delete";
         }
     }
?>