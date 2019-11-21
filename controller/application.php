<?php
include_once("../controller/mydatabase.php");
include_once("../models/objects/user.php");
include_once("../controller/Users/login.php");

$id = $result[0];
$database_connection = new Database();
$db = $database_connection->getconnecion();

if (isset($_POST['fname'] )){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$ophone = $_POST['ophone'];
$dob = $_POST['dob'];
$citizen = $_POST['citizen'];
$city = $_POST['city'];
$fcity = $_POST['fcity'];
$live = $_POST['live'];
$appliedbefore = $_POST['appliedbefore'];
$major = $_POST['major'];
$disability = $_POST['disability'];
$message = $_POST['message'];

updatePersonalInfo($db,$id,$fname,$lname,$email,$gender,$phone,$ophone,$dob,$citizen,$city,$fcity,$live,$appliedbefore,$major,$disability,$message);

}

if (isset($_POST['university'])){
    $university = $_POST['university'];
    $country = $_POST['country'];
    $usdate = $_POST['usdate'];
    $uedate = $_POST['uedate'];
    $highschool = $_POST['highschool'];
    $hsdate = $_POST['hsdate'];
    $hedate = $_POST['hedate'];
    $hpname = $_POST['hpname'];
    $hpemail = $_POST['hpemail'];
    updateademichistory($db,$id,$university,$country,$usdate,$uedate,$highschool,$hsdate,$hedate,$hpname,$hpemail);

}

if (isset($_POST['essay_info_btn'])){
    $type_exams = $_POST['ename'];
    $exam_center = $_POST['center'];
    $index_number = $_POST['inumber'];
    $exam_date = $_POST['edate'];
    $essay = $_POST['essay'];
    
    updateAcademicHistory($db,$id,$type_exams,$exam_center,$index_number,$exam_date,$essay);

    header("Location:  http://localhost/WebTechProject1/views/success.php");
}



function readpersonal($db){
    $table_name = "personal_information";
    $conn = $db;
    $query = "SELECT *
    FROM
        " . $table_name . " 
    WHERE
        studentId='".$_SESSION['user_id']."'";

    $result = $conn->query($query);
    // execute query
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    $result = $result->fetch_array();
    return $result;
}

function readhistory($db){
    $table_name = "academic_hist";
    $conn = $db;
    $query = "SELECT *
    FROM
        " . $table_name . " 
    WHERE
        studentId='".$_SESSION['user_id']."'";

    $result = $conn->query($query);
    // execute query
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    $result = $result->fetch_array();
    return $result;
}


function readAdditionalInfo($db){
    $table_name = "exam_results_essay";
    $conn = $db;
    $query = "SELECT *
    FROM
        " . $table_name . " 
    WHERE
        studentId='".$_SESSION['user_id']."'";

    $result = $conn->query($query);
    // execute query
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    $result = $result->fetch_array();
    return $result;
}

function updatePersonalInfo($db,$id,$firstname,$lastname,$email,$gender,$phone,$otherphone,$dob,$citizen,$city,$address,$living,$applybefore,$disability,$major,$message){

    $conn = $db;

    $query = "UPDATE personal_information set studentId = $id, first_name = '$firstname',last_name ='$lastname',email = '$email',gender ='$gender',phone_number1 = '$phone', phone_number2 = '$otherphone',date_of_birth = '$dob',citizenship = '$citizen',city = '$city',address1 = '$address',place_of_living = '$living',apply_before ='$applybefore',disability ='$major',Major='$disability',further_info= '$message'";
    $result = $conn->query($query);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
  
}



function updateAcademicHistory($db,$id,$type_exams,$exam_center,$index_number,$exam_date,$essay){

    $conn = $db;

    $query = "UPDATE exam_results_essay set studentId = $id,type_exams= '$type_exams', exam_center = '$exam_center',index_number = '$index_number',exam_date = '$exam_date ',essay ='$essay'";
    $result = $conn->query($query);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
  


}



function updateademichistory($db,$id,$university,$country,$usdate,$uedate,$highschool,$hsdate,$hedate,$hpname,$hpemail){

    $conn = $db;

    $query = "UPDATE  academic_hist SET studentId = $id ,name_uni = '$university',country_uni = '$country',start_date_uni = '$usdate' ,end_date_uni = '$uedate' ,name_shs = '$highschool' ,start_date_shs = '$hsdate' ,end_date_shs ='$hedate',name_principal_shs = '$hpname' ,email_principal_shs = '$hpemail'";
    $result = $conn->query($query);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }



}


?>