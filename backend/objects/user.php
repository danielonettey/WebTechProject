<?php
class User{

    //Database connection and table name
    private $conn;
    private $table_name = "user";

    //Object properties
    public $id;
    public $studentId;
    public $fullname;
    public $email;
    public $phone;
    public $country;
    public $password;
    public $created;

    public function __construct($db){
        $this->conn = $db;
    }
    

    //signup user
    function signup(){
        if($this->isAlreadyExist()){
      
            return FALSE;
        }

        //Query to insert user profile into databse
        $query = "INSERT INTO user (fullname,email,phone,country,pass,created) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssss",$this->fullname,$this->email,$this->phone,$this->country,$this->password,$this->created);


         // Sanitize
         $this->fullname = htmlspecialchars(strip_tags($this->fullname));
         $this->email = htmlspecialchars(strip_tags($this->email));
         $this->phone = htmlspecialchars(strip_tags($this->phone));
         $this->country = htmlspecialchars(strip_tags($this->country));
         $this->password = htmlspecialchars(strip_tags($this->password));
         $this->created = htmlspecialchars(strip_tags($this->created));


         //execute query
         if($stmt->execute()){
             return true;
         }
         return false;


    
    }


     // login user
     function login(){
        // select all query
        $query = "SELECT *
                FROM
                    " . $this->table_name . " 
                WHERE
                    email='".$this->email."' AND pass='".$this->password."'";
        // prepare query statement
        $result = $this->conn->query($query);
        // execute query
        if (!$result) {
            trigger_error('Invalid query: ' . $this->conn->error);
        }
        return $result;
    }

    function isAlreadyExist(){
        try{
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                email='".$this->email."'";
        // prepare query statement
        $result = $this->conn->query($query);
        }catch(Exception $ex){
            $ex->getMessage();
        }
        if($result->num_rows > 0){
            
            return true;
            
        }
        else{
            
            return false;
        }
    }
}



?>