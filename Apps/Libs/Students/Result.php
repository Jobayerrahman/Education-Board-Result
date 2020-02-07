<?php

    namespace Apps\Libs\Students;
    use Apps\Libs\Database\Database;

    class Result extends Database
    {
        //New Admin Insert
        public function Addresult($name,$roll,$reg,$bangla,$english,$religion,$math,$soscience,$science)
        {
            $sql = "INSERT INTO studentresult (name, roll_number, reg_number, bangla, english, religion, math, soscience, gscience) VALUES ('$name','$roll','$reg','$bangla','$english','$religion','$math','$soscience','$science')";
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


        //Roll number existence check
        public function rollCheck ($roll)
        {
            $sql ="SELECT * FROM studentresult WHERE roll_number = '$roll' ";
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
            $sql ="SELECT * FROM studentresult WHERE reg_number = '$reg'";
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
             $sql ="SELECT * FROM studentresult ";
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

         //Single Result view
         public function viewsingledata($id)
         {
             $sql = "SELECT * FROM studentresult WHERE res_serial_id ='$id'";
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

         //Single result data update
         public function editresult($student_id,$name,$roll,$reg,$bangla,$english,$religion,$math,$soscience,$science)
         {
             $sql="UPDATE INTO studentresult SET name='$name', roll_number='$roll', reg_number='$reg', bangla='$bangla',english='$english', religion='$religion', math='$math', soscience='$soscience', gscience='$science' Where res_serial_id ='$student_id'";
             $data = parent::connection()->query($sql);

             if($data)
             {
                 return true;
             }
             else{
                 return false;
             }
         }
    }
?>