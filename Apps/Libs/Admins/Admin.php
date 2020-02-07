<?php

    namespace Apps\Libs\Admins;
    use Apps\Libs\Database\Database;

    class Admin extends Database
    {
        //New Admin Insert
        public function Addadmin($name,$email,$hash_pass,$nid,$gender,$cell,$address)
        {
            $sql = "INSERT INTO Admininfo (name, email, password, n_id, gender, cell, address) VALUES ('$name','$email','$hash_pass','$nid','$gender','$cell','$address')";
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
            $sql ="SELECT * FROM Admininfo WHERE email = '$email' ";
            $data = parent::connection()->query($sql);

            $email_count = $data -> num_rows;

            if($email_count > 0){
                return false;
            }
            else{
                return true;
            }
        }

        //National Id existence check
        public function nidCheck ($nid)
        {
            $sql ="SELECT * FROM Admininfo WHERE n_id = '$nid' ";
            $data = parent::connection()->query($sql);

            $nid_count = $data -> num_rows;

            if($nid_count > 0){
                return false;
            }
            else{
                return true;
            }
        }

        public function viewdata()
        {
            
        }
    }
?>