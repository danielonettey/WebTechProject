<?php
/**
 * @author Emmanuel Antwi
 * @author Daniel Nettey
 * @author Caleb Fianu
 * @author Donal Awunyo
 * A moduel that handles the signup page
 */


 
 //get database 
 include_once("../mydatabase.php");


 //get user object
 include_once('../../models/objects/user.php');

 //Instantiate database
 $database_connection = new Database();
 $db = $database_connection->getconnecion();

$user = new User($db);

//setting user profile
if (isset($_POST['register_user'])){
    $user->firstname = $_POST['fname'];
    $user->lastname = $_POST['lname'];
    $user->gender = $_POST['gender'];
    $user->email =   $_POST['email'];
    $user->dob = $_POST['dob'];
    $user->phone = $_POST['phone'];
    $user->country = $_POST['country'];
    $user->password = base64_encode($_POST['password']);
    $user->created = date('Y-m-d');

}

//create the user and application
/**
 * signup by providing information
 *
 * @param Request $request Request
 *
 * Redirect users to login page
 *
 * @throws BadRequestHttpException
 *
 * @Rest\Post("/login")
 */
if($user->signup()){
    $user->applicant();
    $user->insertPersonalInfo();
    $user->insertacademichistory();
    $user->insertAdditionalInfo();
    header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views/");
}else{
    header("Location:  http://cs.ashesi.edu.gh/~daniel_nettey/WebTechProject/views/register.php");
}


?>