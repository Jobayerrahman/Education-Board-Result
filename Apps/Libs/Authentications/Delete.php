<?php
    namespace Apps\Libs\Authentications;
    use Apps\Libs\Database\Database;
    class Delete extends Database{
        public function studentdelete($id)
        {
            $sql = "DELETE FROM studentinfo WHERE stu_serial_num = '$student_id'";
            $data = $con->query($sql);

            if($data == true)
            {
                header("Location: Studentinfo.php");
            }
            else
            {
                echo "Data not delete";
            }
        }
    }
?>