<?php
    class connection{
        private $conn;

        public function __construct(){
            $this ->conn =new mysqli("localhost", "root",  "1234", "prueba");
        }     
        public function get_connection() {
            return $this->conn;
        }
    }


?>