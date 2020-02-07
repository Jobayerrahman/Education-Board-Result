<?php
    namespace Apps\Libs\Database;
    use mysqli;
    abstract class Database{
        
        //server information
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $database_name = 'ebr';


        //connection setup
        protected function connection(){
            return new mysqli($this -> host, $this ->user, $this-> pass, $this-> database_name);
        }
    }
?>