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
    public $progress;
    public $status = "New Applicant";

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
         $this->progress = 0;
         $result = $this->login();
         $result = $result->fetch_array();
         echo "fchgcghg".$result[1];
        $this->studentId = $result[0];
         //execute query
         if($stmt->execute()){
            
             return true;
         }
         return false;


    
    }

    function applicant(){
        
        //Query to insert user profile into databse
        $query = "INSERT INTO applicationdata (studentId,datecreated,progress,lastedited,appstatus) VALUES (?,?,?,?,?)";
        $stmt2 = $this->conn->prepare($query);
        $stmt2->bind_param("sssss",$this->studentId,$this->created,$this->progress,$this->created,$this->status);
        if($stmt2->execute()){
            $this->applicant();
             echo "done";
             return true;
         }else{
             $this->conn->error;
         }

         echo "not done";


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