<?php
include_once("../mydatabase.php");
include_once("../objects/user.php");



function userprofile(){
        //Database connection
    $database_connection = new Database();
    $db = $database_connection->getconnecion();


    $user = new User($db);


    //setting user profile
    if (isset($_GET['login_user'])){

        $user->email =   $_GET['email'];
        $user->password = base64_encode($_GET['password']);
        

    }

    $stmt = $user->login();
    

    if ($stmt->num_rows > 0){
        $result = $stmt->fetch_array();
        session_start();
        $_SESSION['user_id']= $result[0];
        $GLOBALS['user_name'] = $result[1];
        
        header("Location: http://localhost/WebTechProject/admission_portal_frontend/");
        
    }else{
        header("Location: http://localhost/WebTechProject/admission_portal_frontend/");
    }
    

}

userprofile()


?>