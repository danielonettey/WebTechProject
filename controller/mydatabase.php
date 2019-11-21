<?php 
/**
 * @author Emmanuel Antwi
 * @author Daniel Nettey
 * @version 1.0
 */
class Database 
{
        //database connection variables
        private  $servername = "cs.ashesi.edu.gh";
        private  $username = "daniel_nettey";
        private  $password = "daniel_nettey";
        private  $dbname = "webtech_fall2019_daniel_nettey";
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