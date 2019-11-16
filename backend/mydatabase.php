<?php 
/**
 * @author Emmanuel Antwi
 * @author Daniel Nettey
 * @version 1.0
 */
class Database 
{
        //database connection variables
        private  $servername = "localhost";
        private  $username = "root";
        private  $password = "";
        private  $dbname = "admissionsdatabase";
        public $connection = null;
    /**
     * A constructed to creates a database connection 
     */


        public function getconnecion(){
              //Create connection
              $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->dbname);

              // Check connection
              if($this->connection->connect_error){
                  error_log("Database not created " . $this->connection->connect_error);
              }else{
                  echo("Database connected" .' </br> ');
              }
            return $this->connection;
        }


}
?>