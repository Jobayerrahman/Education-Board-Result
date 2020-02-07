<?php
     namespace Apps\Libs\Authentications;
     use Apps\Libs\Database\Database;
 
     session_start();

     class Register extends Database{


        public function register($name,$nid,$address,$email,$hash_pass,$cell){
                    $sql = "INSERT INTO memberinfo (name,n_id,address,email,password,cell) VALUES ('$name','$nid','$address','$email','$hash_pass','$cell')";
                    $data = parent::connection()->query($sql);
                    
                    if($data =true)
                    {
                        return header("location:login.php");
                    }
                    else
                    {
                        return "Data not inserted";
                    }
        }
     }
?>