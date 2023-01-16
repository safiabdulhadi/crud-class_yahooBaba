<?php
class Database{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = 'Safi1994?';
    private $db_name = 'testing';

    private $mysqli = '';
    private $result = array();
    private $conn = false;

    public function __construct(){
        if(!$this->conn){
            // This is datbase connection new mysqli
            $this->mysqli = new mysqli($this->db_host,$this->db_user, $this->db_pass,$this->db_name);
            if($this->mysqli->connect_error){
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        }else{
            return true;
        }
    }
    // Function to insert into database
    public function insert(){

    }
    // Function to update row in database
    public function update(){

    }
    // Function to delete table or row(s) from database
    public function delete(){

    }
    // Function to SELECT From database
    public function select(){

    }
    // Close connection
    public function __destruct(){

    }
} // Class close

?>