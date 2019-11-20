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
include_once("./mydatabase.php");
include_once("../models/objects/user.php");

if (isset($_POST['updateprofile'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $database_connection = new Database();
    $db = $database_connection->getconnecion();
    $id = $_GET['id'];
    //echo "hgg".$id;
    updateprofile($db,$id,$firstname,$lastname,$email,$phone,$country,$dob,$gender);
}

function updateprofile($db,$id,$firstname,$lastname,$email,$phone,$country,$dob,$gender){
    $table_name = "user";
    $conn = $db;
    
    if(!$firstname==""){
        $query = "UPDATE " . $table_name . "  set firstname = '$firstname' WHERE studentId=  $id";
        $result = $conn->query($query);
    }
    if(!$lastname==""){
        $query = "UPDATE " . $table_name . "  set lastname = '$lastname' WHERE studentId=  $id";
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
    if(!$dob==""){
        $query = "UPDATE " . $table_name . "  set country= '$dob' WHERE studentId=  $id";
        $result = $conn->query($query);
    }
    if(!$gender==""){
        $query = "UPDATE " . $table_name . "  set gender= '$gender' WHERE studentId=  $id";
        $result = $conn->query($query);
    }
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views");
  
    }
?>