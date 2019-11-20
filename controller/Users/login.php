<?php
/**
 * @author Emmanuel Antwi
 * @author Daniel Nettey
 * @author Caleb Fianu
 * @author Donald Awunyo
 * A php file that instantiates a user during login. It also holds
 * Information about the user>
 * This information is displayed at user profile and updates are allowed.
 */
include_once("../mydatabase.php");
include_once("../../models/objects/user.php");


/**
 * Login via email and password
 *
 * @param Request $request Request
 *
 * redirect users to index page.
 *
 * @throws BadRequestHttpException
 *
 * @Rest\Post("/login")
 */
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
        
        header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views/");
        
    }else{
        header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views/");
    }
    

}

userprofile()


?>