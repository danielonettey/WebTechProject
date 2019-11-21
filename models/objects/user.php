<?php
/**
 * user Class
 *
 * @version 0.1.0
 */
class User{

    //Database connection and table name
    private $conn;
    private $table_name = "user";

    //Object properties
    public $id;
    public $studentId;
    public $fullname;
    public $lastname;
    public $gender;
    public $dob;
    public $email;
    public $phone;
    public $country;
    public $password;
    public $created;
    public $progress;
    public $status = "New Applicant";
    public  $otherphone = " ";
    public $citizen = " ";
    public $city = " ";
    public $address = " ";
    public $living = " ";
    public $applybefore = " ";
    public $major= " ";
    public $disability = " ";
    public $message = " ";
    public $university = " ";
    public $usdate = " ";
    public $uedate = " ";
    public $highschool = " ";
    public $hsdate = " ";
    public $hedate= " ";
    public $hpname= " ";
    public $hpemail= " ";
    public $type_exams = " ";
    public $exam_center = " ";
    public $index_number = " ";
    public $exam_date = " ";
    
    public $essay = " ";

    /**
     * constructor to initialize database
     */
    public function __construct($db){
        $this->conn = $db;
    }
    

    //signup user
    /**
     * @return bool
     * signs user up by checking if they already exit
     * If not account is created for users
     */
    function signup(){
        if($this->isAlreadyExist()){
      
            return FALSE;
        }

        //Query to insert user profile into databse
        $query = "INSERT INTO user (firstname,lastname,email,phone,country,dob,gender,pass,created) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssssssss",$this->firstname,$this->lastname,$this->email,$this->phone,$this->country,$this->dob,$this->gender,$this->password,$this->created);


         // Sanitize
         $this->firstname = htmlspecialchars(strip_tags($this->firstname));
         $this->lastname = htmlspecialchars(strip_tags($this->lastname));
         $this->email = htmlspecialchars(strip_tags($this->email));
         $this->phone = htmlspecialchars(strip_tags($this->phone));
         $this->country = htmlspecialchars(strip_tags($this->country));
         $this->password = htmlspecialchars(strip_tags($this->password));
         $this->created = htmlspecialchars(strip_tags($this->created));
         $this->gender = htmlspecialchars(strip_tags($this->gender));
         $this->dob = htmlspecialchars(strip_tags($this->dob));
         
         $this->progress = 0;

         //execute query
         if($stmt->execute()){
            $result = $this->login();
            $aa = $result->fetch_array();

           $this->studentId = $aa[0];
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
             return true;
         }
         return false;


    }


    function insertAdditionalInfo(){
        
        //Query to insert user profile into databse
        $query = "INSERT INTO exam_results_essay (studentId,type_exams,exam_center,index_number,exam_date,essay) VALUES (?,?,?,?,?,?)";
        $stmt2 = $this->conn->prepare($query);
        $stmt2->bind_param("ssssss",$this->studentId,$this->type_exams,$this->exam_center,$this->index_number,$this->dob,$this->essay);
        if ($stmt2->execute()){
            return true;
        }else{
            trigger_error('Invalid query: ' . $this->conn->error);
            return false;
        }


    }


    function insertPersonalInfo(){

    
        $query = "INSERT INTO personal_information (studentId,first_name,last_name,email,gender,phone_number1,phone_number2,date_of_birth,citizenship,city,address1,place_of_living,apply_before,disability,Major,further_info) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssssssssss",$this->studentId,$this->firstname,$this->lastname,$this->email,$this->gender,$this->phone,$this->otherphone,$this->dob,$this->citizen,$this->city,$this->address,$this->living,$this->applybefore,$this->major,$this->disability,$this->message);
        
        if ($stmt->execute()){
            return true;
        }else{
            trigger_error('Invalid query: ' . $this->conn->error);
            return false;
        }
    
    }

    
    function insertacademichistory(){


        $query = "INSERT INTO academic_hist (studentId,name_uni,country_uni,start_date_uni,end_date_uni,name_shs,start_date_shs,end_date_shs,name_principal_shs,email_principal_shs) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssss",$this->studentId,$this->university,$this->country,$this->dob,$this->dob,$this->highschool,$this->dob,$this->dob,$this->hpname,$this->hpemail);

        if ($stmt->execute()){
            return true;
        }else{
            trigger_error('Invalid query: ' . $this->conn->error);
            return false;
        }



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
            //echo "User already exist";
            return true;
            
        }
        else{
            
            return false;
        }
    }
}



?>