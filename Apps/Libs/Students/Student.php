<?php

    namespace Apps\Libs\Students;
    use Apps\Libs\Database\Database;

    class Student extends Database
    {
        //New Admin Insert
        public function AddStudent($name,$email,$roll,$reg,$exam,$cell,$group)
        {
            $sql = "INSERT INTO studentinfo (name, email, roll_number, reg_number, exam_level, group_name, cell) VALUES ('$name','$email','$roll','$reg','$exam','$group','$cell')";
            $data = parent::connection() -> query($sql);

            if($data)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        //Email existence check
        public function emailCheck($email)
        {
            $sql ="SELECT * FROM studentinfo WHERE email = '$email' ";
            $data = parent::connection()->query($sql);

            $email_count = $data -> num_rows;

            if($email_count > 0){
                return false;
            }
            else{
                return true;
            }
        }

        //Roll number existence check
        public function rollCheck ($roll)
        {
            $sql ="SELECT * FROM studentinfo WHERE roll_number = '$roll' ";
            $data = parent::connection()->query($sql);

            $nid_count = $data -> num_rows;

            if($nid_count > 0){
                return false;
            }
            else{
                return true;
            }
        }


        //Regtration number existence check
        public function regCheck ($reg)
        {
            $sql ="SELECT * FROM studentinfo WHERE reg_number = '$reg'";
            $data = parent::connection()->query($sql);

            $nid_count = $data -> num_rows;

            if($nid_count > 0){
                return false;
            }
            else{
                return true;
            }
        }

        //Student Information view
        public function viewdata()
        {
            $sql ="SELECT * FROM studentinfo ";
            $data = parent::connection()->query($sql);

            if($data == true)
            {
                return $data;
            }
            else
            {
                return false;
            }
        }
    }
?>