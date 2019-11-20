<?php 

	

function readall($db){

    $table_name = "user";
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

include_once("../backend/mydatabase.php");
include_once("../backend/objects/user.php");
if (isset($_POST['updateprofile'])) {
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$database_connection = new Database();
$db = $database_connection->getconnecion();
$id = $_GET['id'];
//echo "hgg".$id;
updateprofile($db,$id,$fullname,$email,$phone,$country);

}




function updateprofile($db,$id,$fullname,$email,$phone,$country){
    $table_name = "user";
    $conn = $db;
    
    if(!$fullname==""){
        $query = "UPDATE " . $table_name . "  set fullname = '$fullname' WHERE studentId=  $id";
        $result = $conn->query($query);
    }

    if(!$email==""){
        $query = "UPDATE " . $table_name . "  set email = '$email' WHERE studentId=  $id";
        $result = $conn->query($query);
    }

    if(!$phone==Null){
        $query = "UPDATE " . $table_name . "  set phone = '$phone' WHERE studentId=  $id";
        $result = $conn->query($query);
    }

    if(!$country==""){
        $query = "UPDATE " . $table_name . "  set country= '$country' WHERE studentId=  $id";
        $result = $conn->query($query);
    }
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header("Location: http://localhost/web%20tech%20project/WebTechProject/admission_portal_frontend/");
  
    }






?>